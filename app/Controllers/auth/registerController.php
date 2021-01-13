<?php
namespace App\Controllers\Auth;

use App\Controllers\BaseController\BaseController;
use App\Models\UserModel;
use App\Process\Traits\FilterInput;
use App\Process\Traits\Redirect;
use App\Process\Traits\Validate;

class RegisterController extends BaseController{
    use FilterInput;
    use Validate;
    use Redirect;
    private $_createActionRoles =
    [
        'name'          => 'req|alpha|between(3,40)',
        'email'         => 'req|email',
        'phonenumber'   => 'alphanum|max(15)',
        'password'      => 'req|min(8)',
        'passwordCr'    =>  'req|min(8)',
        
    ];

    public function home(){
        $this->view('auth','register');
    }
    public function CheckData()
    {

        if($_SERVER['REQUEST_METHOD']=='POST' && $this->isValid($this->_createActionRoles,$_POST)):
            $name       =  $this->filterString($_POST['name']);
            $email      =  $this->filterString($_POST['email']);
            $password   =  $this->filterString($_POST['password']);
            $passwordCr   =  $this->filterString($_POST['passwordCr']);
            $phone      =  $this->filterString($_POST['phonenumber']);

            if($password == $passwordCr):
                if(UserModel::created($name,$email,$password,$phone)):
                    return $this->redirect('/E-commarce-main/login/home');
                endif;
            endif;
        else:
            return $this->redirect('/E-commarce-main/register/home');
        endif;

    }
}
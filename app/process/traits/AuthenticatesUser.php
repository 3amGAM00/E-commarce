<?php 

namespace App\Process\Traits;
use App\Models\UserModel;

trait AuthenticatesUser
{
    use Validate,redirect;

    private $_createActionRoles = [
        'email'=>'req|email',
        'password'=>'req|min(2)'
    ];
    public function home(){
        $this->view('auth','login');
    }


    public function authlogin()
    {
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['Login'])):
             $validate = $this->isValid($this->_createActionRoles,$_POST);

            if(UserModel::Login($_POST['email'] , $_POST['password'])):
                 $date = UserModel::Login($_POST['email']  ,$_POST['password']);

                    session_start();
                    $_SESSION['user']= $date;
                  $this->redirect('/E-commarce\\');
                  return ;
             else:
                 $this->data['msg-Error'] = "كلمة السر او الايميل غير صحيح";
                 back();
             endif;
         endif;
    }

     public function isValidate()
     {
     }
    // public function username()
    // {
    //     return 'username';
    // }

}
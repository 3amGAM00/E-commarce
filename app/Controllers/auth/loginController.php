<?php 

namespace App\Controllers\Auth;

use App\Controllers\BaseController\BaseController;
use App\Models\UserModel;
use App\Process\Traits\AuthenticatesUser;
use App\Process\Traits\FilterInput;
use App\Process\Traits\Redirect;
use App\Process\Traits\Validate;

class LoginController extends BaseController{
    use AuthenticatesUser;
   
    public function __construct()
    {
    //     if(isset($_SESSION['user'])):
    //         $this->view('index','index');            
    //    endif;
    }
 


   

}
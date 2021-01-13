<?php 

namespace App\Controllers\Auth;


use App\Process\Traits\Redirect;
use App\Controllers\BaseController\BaseController;

class LogoutController extends BaseController{
    use Redirect;

    public function home()
    {
        unset ($_SESSION['u']);
        session_destroy();
       return $this->redirect('/ecommarce/public/index/home');
    }

   

    

   

}
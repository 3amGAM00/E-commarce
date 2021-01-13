<?php

namespace App\Controllers\Dashboard\Auth;
use App\Controllers\BaseController\BaseController;
use App\Process\Authentication as Auth;
use App\Process\Traits\AuthenticatesUser;

class adminLoginController extends BaseController 
{   
     use AuthenticatesUser;
    // public function __construct()
    // {
        
    // } 
    public function home()
    {        
         return $this->view('Dashboard','Auth/login');
    }

     public function login()
     {
         echo $_POST['username'];
         echo "<br>";
         echo $_POST['password'];

     }
}

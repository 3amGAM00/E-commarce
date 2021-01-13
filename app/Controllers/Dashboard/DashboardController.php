<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController\BaseController;
use App\Process\Authentication as Auth;

class DashboardController extends BaseController 
{    

    public function __construct()
    {
//         if(!isset($_SESSION['admin'])):
//             return $this->view('Dashboard','Auth/login');
//         endif;
    }
    public function home()
    {
        if(!isset($_SESSION['admin'])):
            $this->view('Dashboard','Auth/login');
            return;
        endif;
         $this->language->load('index.index');
         $lang = $this->language->getDictionary();
         $name = "DashBoard";
         $this->view('Dashboard','index/index',compact('lang','name'));
    }
}

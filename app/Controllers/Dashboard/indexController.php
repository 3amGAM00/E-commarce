<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController\BaseController;
use App\Process\Authentication;
class DashboardController extends BaseController
{

    public function home()
    {
        
        return $this->view('Dashboard','index/index');
    }
}

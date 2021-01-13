<?php
namespace App\Controllers;

use App\Controllers\BaseController\BaseController;
use App\Models\ProductModel;
use App\Models\UserModel;
use App\Process\language;

class IndexController extends BaseController{

    public function home()
    {
        $this->data['users'] = UserModel::getAll();

        $this->view('index','index');

    }
   
   
    
}

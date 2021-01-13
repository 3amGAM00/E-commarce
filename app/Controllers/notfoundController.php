<?php
namespace App\Controllers;

use App\Controllers\BaseController\BaseController;

class NotFoundController extends BaseController{

    public function home()
    {
        return $this->view('notfound','notfund');
    }
}

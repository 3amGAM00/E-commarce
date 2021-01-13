<?php 

namespace App\Process\Traits;

trait Redirect{

   
    public function redirect($url)
    {
        return header("location:".$url);
    }

    



}
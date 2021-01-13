<?php 

namespace App\Process;

class AuthLodaing{

    public static function autoload($NameView){

        $view = str_replace("\\",'/',$NameView);
        $view = str_replace("App",'',$NameView);
        $path = APP_PATH.strtolower($view).'.php';
        if(file_exists($path)):
            require $path;
       endif;
    }

}
spl_autoload_register(__NAMESPACE__.'\AuthLodaing::autoload');
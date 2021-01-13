<?php 
namespace App\Process;
 class language
 {
    private $dictionary = [];
    public function load($path)
    {   
       $appLanguage = DEFULT_LANGUAGE;
     
    //    if(isset($_SESSION['lang'])):
    //        $appLanguage = $_SESSION;
    //    endif;

       $filelanguage =  PATH_LANG.$appLanguage.DS.str_replace('.', DS , $path).'.lang.php';
     
       if(file_exists($filelanguage)):
        require($filelanguage);
            if(is_array($_) && !empty($_)):
                foreach($_ as $key => $value):
                        $this->dictionary[$key] = $value; 
                endforeach; 
            endif;
        else:
            trigger_error('Sorry the language file ' . $path . ' doens\'t exists', E_USER_WARNING);
       endif;
    }   

     public function get($key)
     {
         if(array_key_exists($key, $this->dictionary)) {
             return $this->dictionary[$key];
         }
     }

     public function feedKey ($key, $data)
     {
         if(array_key_exists($key, $this->dictionary)) {
             array_unshift($data, $this->dictionary[$key]);
             return call_user_func_array('sprintf', $data);
         }
     }

    public function getDictionary()
    {
        return $this->dictionary;
    }
    
 }
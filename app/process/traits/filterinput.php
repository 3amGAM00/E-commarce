<?php 

namespace App\Process\Traits;

trait FilterInput{

   
    public function filterString($input)
    {
        return htmlentities(strip_tags($input), ENT_QUOTES, 'UTF-8');
    }

    public function Filternum($value)
    {
        return filter_var($value,FILTER_SANITIZE_NUMBER_INT);
    }



}
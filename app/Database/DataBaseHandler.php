<?php 
 namespace App\DataBase;
use App\DataBase\PDODataBase;
abstract class DataBaseHandler{

     abstract public function init();
     abstract public static function getInstance();

     public static function factory(){
         return PDODataBase::getInstance();
     }
 }
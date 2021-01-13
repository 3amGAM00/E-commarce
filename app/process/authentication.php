<?php
namespace App\Process;
class Authentication{
    private static $_instance;
    private  $_session;
    public function __construct($session)
    {
        $this->_session = $session;
    }
    public function __clone()
    {
        
    }
    public static function getInctance(SessionManger $session)
    {
        if(self::$_instance === null):
            self::$_instance = new self($session);
        endif;
        return self::$_instance;
    }
    public function isAuth()
    {
        if(isset($this->_session->user)):
            return true;
        else:
            return false;
        endif;
    }
}
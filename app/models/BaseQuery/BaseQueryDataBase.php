<?php 
namespace App\Models\BaseQuery;

use App\DataBase\DataBaseHandler;

class BaseQueryDataBase{

    const DATA_TYPE_BOOL = \PDO::PARAM_BOOL;
    const DATA_TYPE_STR = \PDO::PARAM_STR;
    const DATA_TYPE_INT = \PDO::PARAM_INT;
    const DATA_TYPE_DECIMAL = 4;
    const DATA_TYPE_DATE = 5;

    const VALIDATE_DATE_STRING = '/^[1-2][0-9][0-9][0-9]-(?:(?:0[1-9])|(?:1[0-2]))-(?:(?:0[1-9])|(?:(?:1|2)[0-9])|(?:3[0-1]))$/';

    public static function getAll(){
        
        $sql = "SELECT * FROM ".static::$table;
        $query = DataBaseHandler::factory()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
        
    }

    public static function getBynum($num)
    {
        $tableName = static::$table;
        $sql = "SELECT * FROM $tableName WHERE id < $num";
        $query = DataBaseHandler::factory()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public static function getAllBykey($keyid){
        $tableName = static::$table;
        $sql = "SELECT * FROM $tableName WHERE id = $keyid";
        $query = DataBaseHandler::factory()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public static function NewData($num = 1)
    {
        $tableName = static::$table;
        $sql = "SELECT * FROM $tableName ORDER BY created_at DESC LIMIT $num";
        $query = DataBaseHandler::factory()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public static  function Login($email , $password)
    {
        
        $tableName  =       static::$table;
        $passwordHash   =       hash("haval160,5",$password);
        
        $sql = "SELECT * FROM $tableName WHERE email = '$email' AND password = '$passwordHash'";
        $query = DataBaseHandler::factory()->prepare($sql);

        $query->execute();
        return $query->fetchAll(); 
    }
  

    public  static function created($name,$email,$phone,$password)
    {
        $tableName      =       static::$table;
        $passwordHash   =       hash("haval160,5",$password);
        $date           =       date('d-m-y',time('h-m-s')); 
        $sql = "INSERT INTO $tableName (`id`, `name`, `email`, `phone_number`, `password`, `created_at`, `updated_at`) VALUES(NULL, '$name','$email','$phone','$passwordHash','$date','$date')";
        $query = DataBaseHandler::factory()->prepare($sql);
        var_dump($query);
        $query->execute();
        return true; 
    }




}
<?php


namespace App\Models;


use App\Models\BaseQuery\BaseQueryDataBase;

class ProductModel extends BaseQueryDataBase
{
    protected static $table =  'products';

    protected $fillable = [
        'id'=>self::DATA_TYPE_INT,
        'name' => self::DATA_TYPE_STR,
        'price' => self::DATA_TYPE_DECIMAL,
        'offer' =>self::DATA_TYPE_DECIMAL,
        'description'=>self::DATA_TYPE_STR,
        'image' =>self::DATA_TYPE_STR,
        'category'=>self::DATA_TYPE_INT,
        'updated_at'=>self::DATA_TYPE_DATE,
        'created_at'=>self::DATA_TYPE_DATE,
    ];

    protected $key = 'id';



}
<?php


namespace App\Models;


use App\Models\BaseQuery\BaseQueryDataBase;

class CategoryModel extends BaseQueryDataBase
{
    protected static $table = 'categories';

    protected $fiilable = [
        'id',
        'Category',
        'created_at',
        'updated_at',
        
    ];
    protected $key = 'id';
}
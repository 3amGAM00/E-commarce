<?php

namespace App\Models;

use App\Models\BaseQuery\BaseQueryDataBase;

class UserModel extends BaseQueryDataBase
{

    protected static $table = 'users';

    protected $fillable = ['id','name','email','pass'];

    protected $key = 'id';



}
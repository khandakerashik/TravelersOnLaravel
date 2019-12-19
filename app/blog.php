<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    //protected $table = "user_table";
    protected $table = "blogs";
    protected $primaryKey = "id";
    public $timestamps = false;

    //const CREATED_AT = "create_time";
    //const UPDATED_AT = "updated_time";
}

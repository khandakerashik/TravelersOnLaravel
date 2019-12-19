<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //protected $table = "user_table";
    protected $table = "users";
    protected $primaryKey = "id";
    public $timestamps = false;

    //const CREATED_AT = "create_time";
    //const UPDATED_AT = "updated_time";
}

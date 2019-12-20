<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //protected $table = "user_table";
    protected $table = "admins";
    protected $primaryKey = "id";
    public $timestamps = false;

    //const CREATED_AT = "create_time";
    //const UPDATED_AT = "updated_time";
}

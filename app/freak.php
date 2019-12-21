<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class freak extends Model
{
    //protected $table = "user_table";
    protected $table = "freaks";
    protected $primaryKey = "id";
    public $timestamps = false;
}

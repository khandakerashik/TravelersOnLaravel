<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class declined_events extends Model
{
    
    protected $table = "declined_events";
    protected $primaryKey = "id";
    public $timestamps = false;
    
}
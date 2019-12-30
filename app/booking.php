<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class booking extends Model
{
    
    protected $table = "booking";
    protected $primaryKey = "id";
    public $timestamps = false;
    
}
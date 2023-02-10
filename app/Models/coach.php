<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coach extends Model
{
    use HasFactory;
    protected $gaurded=[];
    protected $fillable =['name','city','image','sport_id'];
    protected $table='coaches';
}

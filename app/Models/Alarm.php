<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alarm extends Model
{
    use HasFactory;

      protected $fillable = [
'nom',
'image',
'prix',
'option1',
'option2',
'option3', 
'option4', 
'option5',
'option6', 
'option7',
'option8'

          
    ];
}
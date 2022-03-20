<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;


   public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }




     public function commande_produit()
    {
        return $this->hasMany(Commande_alarm::class, 'commande_id');
                return $this->hasMany(Commande_video::class, 'commande_id');

    }



}

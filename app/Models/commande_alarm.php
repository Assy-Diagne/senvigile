<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande_alarm extends Model
{
    use HasFactory;

     protected $table = "alarm_commande";

    public function commande()
    {
        return $this->belongsTo(Commande::class)->withDefault();
    }
}

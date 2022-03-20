<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande_video extends Model
{
    use HasFactory;
     protected $table = "video_commande";

    public function commande()
    {
        return $this->belongsTo(Commande::class)->withDefault();
    }
}

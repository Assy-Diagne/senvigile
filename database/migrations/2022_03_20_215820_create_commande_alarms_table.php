<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeAlarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_alarms', function (Blueprint $table) {
            $table->id();
       $table->foreignId('commande_id')->constrained('commandes');
            $table->foreignId('produit_id')->constrained('produits');
                               $table->string('nomproduit');
             $table->string('quantite');



         
         
          $table->integer('totale');

            
            $table->timestamps();
              });
    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande_alarms');
    }
}

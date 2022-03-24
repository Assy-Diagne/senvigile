<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alarms', function (Blueprint $table) {
            $table->id();
             $table->string('nom');
             $table->string('image');
             $table->string('formule')->nullable();
             $table->integer('prix');
             $table->integer('abonnementmensuel')->nullable();
            $table->integer('abonnementannuel')->nullable();

             $table->integer('surcoutab')->nullable();
             $table->integer('forfaitinstallation')->nullable();
             $table->integer('surcoutinst1')->nullable();
            $table->integer('surcoutinst2')->nullable();

             $table->string('option1')->nullable();
             $table->string('option2')->nullable();
             $table->string('option3');
             $table->string('option4')->nullable();
             $table->string('option5')->nullable();
             $table->string('option6')->nullable();
             $table->string('option7')->nullable();
             $table->string('option8')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alarms');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectFloriansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('object_florians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('adress')->nullable();
            $table->string('region')->nullable();
            $table->integer('phone')->nullable();
            $table->string('type_system')->nullable();
            $table->string('name_device')->nullable();
            $table->integer('quanity_shleyf')->nullable();
            $table->integer('quanity_vinosn')->nullable();
            $table->integer('quanity_automat')->nullable();
            $table->integer('quanity_ruchnih')->nullable();
            $table->string('system_type')->nullable();
            $table->integer('quanity_napryamkiv')->nullable();
            $table->integer('quanity_module')->nullable();
            $table->integer('vidpovidalnuy');
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('object_florians');
    }
}

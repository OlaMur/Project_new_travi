<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
         //   $table->foreignId(column:'منطقة-id')->constrained()->cascadeOnDelete(); 
         $table->integer('area-id')->unsigned();
            $table->string('name');

            $table->string('image')->nullable();
            //هذا مربوط بالمناطق
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
        Schema::dropIfExists('places');
    }
};

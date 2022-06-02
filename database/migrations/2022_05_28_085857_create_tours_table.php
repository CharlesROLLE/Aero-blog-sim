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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->integer('legNumber');
            $table->string('name');
            $table->string('slug');
            $table->string('icaoDep');
            $table->string('imageDep');
            $table->longText('icaoDepContent');
            $table->string('icaoDes');
            $table->string('imageDes');
            $table->longText('icaoDesContent');
            $table->longText('descriptionLeg');
            $table->longText('rutaIfr');
            $table->longText('departures');
            $table->longText('arrivals');
            $table->longText('approachs'); 
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
        Schema::dropIfExists('tours');
    }
};

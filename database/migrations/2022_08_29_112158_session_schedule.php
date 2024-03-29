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
        Schema::create('session_schedule', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('session_id');
            $table->unsignedBigInteger('schedule_id');
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
        //
        Schema::dropIfExists('session_schedule');
    }
};

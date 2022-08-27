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
        
        Schema::dropIfExists('time_tables');
        Schema::create('time_tables', function(Blueprint $table){
            $table->engine='InnoDB';
            $table->id();
            $table->unsignedBigInteger('session_id')->nullable();
            $table->string('title');
            $table->json('schedules')->nullable();
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('time_tables');
    }
};

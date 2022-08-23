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
        //
        Schema::create('applications', function(Blueprint $table){
            $table->engine='InnoDB';
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->date('dob');
            $table->string('pob')->nullable();
            $table->string('cni_number');
            $table->date('cni_date');
            $table->string('cni_post');
            $table->string('id_front');
            $table->string('id_back');
            $table->string('passport_photo');
            $table->unsignedBigInteger('mode');
            $table->unsignedBigInteger('session');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('applications');
    }
};

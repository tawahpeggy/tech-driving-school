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
        Schema::create('post_links', function(Blueprint $blueprint){
            $blueprint->engine='InnoDB';
            $blueprint->id();
            $blueprint->unsignedBigInteger('post_id');
            $blueprint->string('label');
            $blueprint->string('url');
            $blueprint->timestamps();
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
        Schema::dropIfExists('post_links');
    }
};

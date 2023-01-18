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
        Schema::create('day7s', function (Blueprint $table) {
            $table->id();
            $table->string('showname');
            $table->string('authorname');
            $table->string('details');
            $table->string('showPicture');
            $table->time('starttime');
            $table->time('closetime');
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
        Schema::dropIfExists('day7s');
    }
};

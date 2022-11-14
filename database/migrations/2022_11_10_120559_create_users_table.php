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
        Schema::create('create_user', function (Blueprint $table) {
            $table->id()->nullble();
            $table->string('nameJob')->nullble();
            $table->string('fullname')->nullble();
            $table->integer('level')->nullble();
            $table->integer('age')->nullble();
            $table->integer('quanlity')->nullble();
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
        Schema::dropIfExists('create_user');
    }
};

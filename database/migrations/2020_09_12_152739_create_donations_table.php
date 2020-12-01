<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('type_of_Donation');
            $table->integer('number_of_piece');
            $table->integer('stock');
            $table->string('image')->nullable();
            $table->string('anther_image')->nullable();
            $table->boolean('status');
            $table->unsignedBigInteger('senderUser_id');
            $table->unsignedBigInteger('needleUser_id')->nullable();

            $table->foreign('senderUser_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('needleUser_id')->references('id')->on('users')->onDelete('cascade');

            $table->softDeletes();
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
        Schema::dropIfExists('donations');
    }
}

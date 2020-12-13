<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('request_commentID')->nullable();
        $table->unsignedBigInteger('granted_commentID')->nullable();
        $table->unsignedBigInteger('rejected_commentID')->nullable();
        $table->boolean('granted')->nullable();
        $table->boolean('rejected')->nullable();
        $table->timestamps();

        $table->foreign('request_commentID')->references('id')->on('comments')
            ->onDelete('cascade');

        $table->foreign('granted_commentID')->references('id')->on('comments')
        ->onDelete('cascade');

        $table->foreign('rejected_commentID')->references('id')->on('comments')
        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}

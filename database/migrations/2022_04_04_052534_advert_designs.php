<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdvertDesigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advert_designs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('upcomingIssue');
            $table->unsignedBigInteger('borough');
            $table->json('advertSize');
            $table->json('quantity');
            $table->string('status')->default('in-progress');
            $table->foreign('upcomingIssue')->on('upcomming_issues')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('borough')->on('boroughs')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('userId')->on('users')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');

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
        Schema::dropIfExists('advert_designs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('advertSize');
            $table->unsignedBigInteger('upcomingIssue');
            $table->string('brief_desc');
            $table->text('content');
            $table->string('logo');
            $table->json('images');
            $table->string('website');
            $table->string('status')->default('in-progress');
            $table->string('fb');
            $table->string('ins');
            $table->string('tw');
            $table->string('yt');
            $table->string('monday_open');
            $table->string('monday_close');
            $table->string('tuesday_open');
            $table->string('tuesday_close');
            $table->string('wednesday_open');
            $table->string('wednesday_close');
            $table->string('thursday_open');
            $table->string('thursday_close');
            $table->string('friday_open');
            $table->string('friday_close');
            $table->string('saturday_open');
            $table->string('saturday_close');
            $table->string('sunday_open');
            $table->string('sunday_close');
            $table->string('holiday_open');
            $table->string('holiday_close');
            $table->foreign('advertSize')->on('adverts')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('upcomingIssue')->on('upcomming_issues')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('design_books');
    }
}

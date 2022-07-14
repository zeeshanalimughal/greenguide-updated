<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->string('event_title');
            $table->string('event_category');
            $table->string('event_date');
            $table->string('event_time');
            $table->string('event_start_date');
            $table->string('event_end_date');
            $table->string('event_location');
            $table->string('event_website');
            $table->text('event_description');
            $table->string('event_main_image');
            $table->json('eventImages');
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
        Schema::dropIfExists('events');
    }
}

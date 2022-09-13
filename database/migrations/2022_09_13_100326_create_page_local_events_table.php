<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageLocalEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_local_events', function (Blueprint $table) {
            $table->id();
            $table->string('hero_image');
            $table->string('hero_title_small');
            $table->string('hero_title_large');
            $table->string('event_sec3_title');
            $table->string('event_sec3_desc');
            $table->string('event_sec3_image');
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
        Schema::dropIfExists('page_local_events');
    }
}

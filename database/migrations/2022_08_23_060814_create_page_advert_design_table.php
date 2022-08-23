<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageAdvertDesignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_advert_design', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title');
            $table->text('hero_subtitle');
            $table->string('hero_image');
            $table->string('section2_heading');
            $table->text('section2_text');
            $table->string('section2_image');
            $table->string('section3_heading');
            $table->text('section3_text');
            $table->string('section4_heading');
            $table->text('section4_text');
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
        Schema::dropIfExists('page_advert_design');
    }
}

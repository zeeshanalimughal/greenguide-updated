<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageMagazineGiveawayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_magazine_giveaway', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title');
            $table->string('hero_subtitle');
            $table->string('hero_image');
            $table->text('section2_text');
            $table->string('section2_heading');
            $table->string('section3_heading');
            $table->string('section3_sponser_name');
            $table->string('section3_subtitle');
            $table->json('section3_gift_images');
            $table->text('section3_hamper_content');
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
        Schema::dropIfExists('page_magazine_giveaway');
    }
}

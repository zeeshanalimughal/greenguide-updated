<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links_cards', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->nullable();
            $table->string('title1')->nullable();
            $table->text('details1')->nullable();
            $table->text('link1')->nullable();
            $table->string('image2')->nullable();
            $table->string('title2')->nullable();
            $table->text('details2')->nullable();
            $table->text('link2')->nullable();
            $table->string('image3')->nullable();
            $table->string('title3')->nullable();
            $table->text('details3')->nullable();
            $table->text('link3')->nullable();
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
        Schema::dropIfExists('links_cards');
    }
}

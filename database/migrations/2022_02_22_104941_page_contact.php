<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_contact', function (Blueprint $table) {
            $table->id();
            $table->string('contact_hero_image');
            $table->string('contact_title');
            $table->string('contact_sub_title');
            $table->text('contact_desc');
            $table->text('contact_map');
            $table->text('contact_team_title');
            $table->string('contact_team_desc');
            $table->string('contact_media_title');
            $table->string('contact_media_desc');
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
        //
    }
}

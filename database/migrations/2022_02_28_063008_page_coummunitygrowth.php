<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageCoummunitygrowth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_communitygrowth', function (Blueprint $table) {
            $table->id();
            $table->string('cg_hero_image');
            $table->string('cg_title');
            $table->string('cg_subtitle');
            $table->string('cg_sec2_title');
            $table->text('cg_sec2_desc');
            $table->string('cg_sec2_image');
            $table->string('cg_sec3_title');
            $table->text('cg_sec3_desc');
          
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

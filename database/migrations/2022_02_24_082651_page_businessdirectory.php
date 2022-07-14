<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageBusinessdirectory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_businessdirectory', function (Blueprint $table) {
            $table->id();
            $table->string('bd_hero_image');
            $table->string('bd_title');
            $table->string('bd_cat_title');
            $table->text('bd_cat_desc');
            $table->string('bd_sec3_title');
            $table->text('bd_sec3_desc');
            $table->string('bd_sec3_image');
            $table->string('bd_sec4_title');
            $table->text('bd_sec4_desc');
          
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

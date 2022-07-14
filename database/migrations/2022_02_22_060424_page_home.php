<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_home', function (Blueprint $table) {
            $table->id();
            $table->string('b1_title');
            $table->string('b1_image');
            $table->string('b2_title');
            $table->string('b2_image');
            $table->string('b3_title');
            $table->string('b3_image');
            $table->string('b4_title');
            $table->string('b4_image');
            $table->string('b5_title');
            $table->string('b5_image');
            $table->string('dir_title');
            $table->text('dir_desc');
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

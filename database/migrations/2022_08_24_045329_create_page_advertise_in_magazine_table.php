<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageAdvertiseInMagazineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_advertise_in_magazine', function (Blueprint $table) {
            $table->id();
            $table->string('sec1_image'); 
            $table->text('sec1_content'); 
            $table->text('sec2_content'); 
            $table->string('sec3_image'); 
            $table->text('sec3_content'); 
            $table->string('sec4_image'); 
            $table->text('sec4_content'); 
            $table->string('sec5_image'); 
            $table->text('sec5_content'); 
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
        Schema::dropIfExists('page_advertise_in_magazine');
    }
}

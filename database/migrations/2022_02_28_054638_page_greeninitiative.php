<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageGreeninitiative extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_greeninitiative', function (Blueprint $table) {
            $table->id();
            $table->string('gi_hero_image');
            $table->string('gi_title');
            $table->string('gi_subtitle');
            $table->text('gi_desc');
            $table->string('gi_sec2_title');
            $table->text('gi_sec2_desc');
            $table->string('gi_sec2_image');
            $table->string('gi_sec3_title');
            $table->text('gi_sec3_desc');
            $table->string('gi_sec4_title');
            $table->text('gi_sec4_desc');
            $table->string('gi_sec4_image');
            $table->string('gi_sec5_title');
            $table->text('gi_sec5_desc');
            $table->string('gi_sec6_title');
            $table->text('gi_sec6_desc');
            $table->string('gi_sec6_image');
          
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

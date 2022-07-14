<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageAdvertise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_advertise', function (Blueprint $table) {
            $table->id();
            $table->string('add_hero_image');
            $table->string('ad_title');
            $table->string('ad_subtitle');
            $table->string('ad_sec2_heading');
            $table->text('ad_sec2_desc');
            $table->string('ad_pathway_heading');
            $table->text('ad_pathway_desc');
            $table->text('ad_service_desc');
            $table->string('ad_benifits_title');
            $table->text('ad_benifits');
            $table->text('ad_prices_desc');
          
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

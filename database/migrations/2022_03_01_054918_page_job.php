<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageJob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_job', function (Blueprint $table) {
            $table->id();
            $table->string('job_hero_image');
            $table->string('job_title');
            $table->string('job_subtitle');
            $table->string('job_sec2_title');
            $table->string('job_sec2_image1');
            $table->string('job_sec2_image2');
            $table->text('job_sec2_sdesc');
            $table->text('job_sec2_ldesc');
            $table->string('job_sec3_title');
            $table->text('job_sec3_sdesc');
            $table->string('job_sec4_title');
            $table->string('job_sec4_subtitle');
          
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

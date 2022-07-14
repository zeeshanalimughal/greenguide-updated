<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_about', function (Blueprint $table) {
            $table->id();
            $table->string('ab_title');
            $table->text('ab_desc1');
            $table->text('ab_desc2');
            $table->string('ab_box1');
            $table->string('ab_box2');
            $table->string('ab_box3');
            $table->string('ab_company');
            $table->text('ab_company_qt');
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

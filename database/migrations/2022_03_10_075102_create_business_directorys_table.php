<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessDirectorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_directorys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->string('category');
            $table->string('subcategory');
            $table->string('sub_sub_category')->nullable();
            $table->string('borough');
            $table->string('logo');
            $table->json('social');
            $table->string('monday_open');
            $table->string('monday_close');
            $table->string('tuesday_open');
            $table->string('tuesday_close');
            $table->string('wednesday_open');
            $table->string('wednesday_close');
            $table->string('thursday_open');
            $table->string('thursday_close');
            $table->string('friday_open');
            $table->string('friday_close');
            $table->string('saturday_open');
            $table->string('saturday_close');
            $table->string('sunday_open');
            $table->string('sunday_close');
            $table->string('holiday_open');
            $table->string('holiday_close');
            $table->foreign('userId')->on('users')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('business_directorys');
    }
}

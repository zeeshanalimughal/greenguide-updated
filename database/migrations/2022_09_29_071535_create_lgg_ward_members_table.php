<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLggWardMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lgg_ward_members', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('wardId');
            $table->string('profile');
            $table->string('name');
            $table->string('party');
            $table->string('landline');
            $table->string('mobile');
            $table->string('email');
            $table->string('twitter');
            $table->string('status');
            $table->foreign('wardId')->on('lgg_wards_list')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('lgg_ward_members');
    }
}

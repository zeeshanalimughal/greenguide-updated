<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDirectoryStatusToBusinessDirectorys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_directorys', function (Blueprint $table) {
            $table->string('directory_status')->after('social')->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_directorys', function (Blueprint $table) {
            $table->dropColumn('directory_status');
        });
    }
}

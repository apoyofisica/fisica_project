<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('father_last_name')->after('name');
            $table->string('mother_last_name')->after('father_last_name');
            $table->string('ci')->after('id');
            $table->string('username')->after('mother_last_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('father_last_name');
            $table->dropColumn('mother_last_name');
            $table->dropColumn('ci');
            $table->dropColumn('username');
        });
    }
}

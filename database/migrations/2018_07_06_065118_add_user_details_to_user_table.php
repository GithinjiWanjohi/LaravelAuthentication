<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserDetailsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('weight')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('pref_gym')->nullable();
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
            $table->dropColumn(['weight']);
            $table->dropColumn(['age']);
            $table->dropColumn(['gender']);
            $table->dropColumn(['pref_gym']);
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageColumnInUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

           $table->string('image')->after('password')->nullable();
           $table->string('smoker')->after('age')->nullable();
           $table->string('drugadd')->after('smoker')->nullable();
           $table->string('gender')->after('drugadd')->nullable();
           $table->string('weight')->after('gender')->nullable();
           $table->string('dob')->after('weight')->nullable();
           $table->string('currdistrict')->after('dob')->nullable();
           $table->string('pradd')->after('currdistrict')->nullable();

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

            $table->dropColumn(['image']);
        });
    }
}

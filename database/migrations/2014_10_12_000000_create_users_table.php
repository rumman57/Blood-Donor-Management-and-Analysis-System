<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('blood_group');
            $table->string('division');
            $table->string('district');
            $table->string('phone');
            $table->string('age');
            $table->text('address')->nullable();
            $table->integer('is_show_profile')->default(1);
            $table->integer('is_show_in_history')->default(1);
            $table->integer('is_want_to_donate_now')->default(1);
            $table->integer('is_wantto_rec_mail_for_admnistrative_purpose')->default(1);
            $table->integer('is_wantto_rec_mail_for_blood_req')->default(1);
            $table->integer('is_wantto_rec_mail_from_people')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('usr_id');
            $table->string('usr_name');
            $table->string('usr_email')->unique();
            $table->timestamp('usr_email_verified_at')->nullable();
            $table->string('usr_password');
            $table->rememberToken('usr_remember_token');


            $table->timestamp('usr_created_at')->nullable();
            $table->timestamp('usr_updated_at')->nullable();
            $table->timestamp('usr_deleted_at')->nullable();
            $table->string('usr_sys_note')->nullable();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('cus_id');
            $table->string('cus_name');
            $table->string('cus_pay');

            $table->bigInteger('cus_created_by')->unsigned()->nullable();
            $table->bigInteger('cus_updated_by')->unsigned()->nullable();
            $table->bigInteger('cus_deleted_by')->unsigned()->nullable();

            $table->foreign('cus_created_by')->references('id')->on('users');
            $table->foreign('cus_updated_by')->references('id')->on('users');
            $table->foreign('cus_deleted_by')->references('id')->on('users');

            $table->timestamp('cus_created_at')->nullable();
            $table->timestamp('cus_updated_at')->nullable();
            $table->timestamp('cus_deleted_at')->nullable();
            $table->string('cus_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

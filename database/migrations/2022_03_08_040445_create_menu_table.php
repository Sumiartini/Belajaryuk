<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id('men_id');
            $table->string('men_image');
            $table->string('men_cut_type');
            $table->integer('men_price');
            $table->integer('men_stock')->nullable();

            $table->bigInteger('men_created_by')->unsigned()->nullable();
            $table->bigInteger('men_updated_by')->unsigned()->nullable();
            $table->bigInteger('men_deleted_by')->unsigned()->nullable();

            $table->foreign('men_created_by')->references('id')->on('users');
            $table->foreign('men_updated_by')->references('id')->on('users');
            $table->foreign('men_deleted_by')->references('id')->on('users');

            $table->timestamp('men_created_at')->nullable();
            $table->timestamp('men_updated_at')->nullable();
            $table->timestamp('men_deleted_at')->nullable();
            $table->string('men_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}

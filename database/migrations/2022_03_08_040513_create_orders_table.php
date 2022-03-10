<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('ord_id');
            $table->string('ord_customer_name');
            $table->integer('ord_quantity');
            $table->integer('ord_customer_pay')->nullable();
            $table->foreignId('ord_men_id')->references('men_id')->on('menu');

            $table->bigInteger('ord_created_by')->unsigned()->nullable();
            $table->bigInteger('ord_updated_by')->unsigned()->nullable();
            $table->bigInteger('ord_deleted_by')->unsigned()->nullable();

            $table->foreign('ord_created_by')->references('id')->on('users');
            $table->foreign('ord_updated_by')->references('id')->on('users');
            $table->foreign('ord_deleted_by')->references('id')->on('users');

            $table->timestamp('ord_created_at')->nullable();
            $table->timestamp('ord_updated_at')->nullable();
            $table->timestamp('ord_deleted_at')->nullable();
            $table->string('ord_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

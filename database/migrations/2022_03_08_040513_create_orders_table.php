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
            $table->string('ord_costumer_name');
            $table->integer('ord_quantity');
            $table->integer('ord_customer_pay');
            $table->foreignId('ord_men_id')->references('men_id')->on('menu');

            $table->foreignId('ord_created_by')->references('usr_id')->on('users')->nullable();
            $table->foreignId('ord_updated_by')->references('usr_id')->on('users')->nullable();
            $table->foreignId('ord_deleted_by')->references('usr_id')->on('users')->nullable();

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

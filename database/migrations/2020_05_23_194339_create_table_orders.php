<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->string('Firstname_TH');
            // $table->string('Lastname_TH');
            // $table->string('Firstname_EN');
            // $table->string('Lastname_EN');
            // $table->string('email');
            // $table->string('phone');
            $table->dateTime('date');//วันชำระเงิน
            $table->decimal('price',10,2); //ยอดเงิน
            $table->text('status'); //สถานะการสั่งซื้อ
            $table->string('image');
            $table->integer('user_id');
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
        Schema::dropIfExists('orders');
    }
}

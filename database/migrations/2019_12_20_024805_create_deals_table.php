<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_cart_id')->unsigned();
            $table->string('name');
            $table->longText('street');
            $table->string('district');
            $table->string('city');
            $table->string('phone');
            $table->string('email');
            $table->tinyInteger('payment'); // 0: Thanh toán khi nhận hàng      1: Thẻ ngân hàng nội địa    2: Visa - Master card
            $table->tinyInteger('status_payment')->default(0); // 0: Chưa thanh toán    1: Đã thanh toán
            $table->tinyInteger('status')->default(0);  // 0: Đang trong kho    1: Xuất kho, đang vận chuyển    2: Đã giao nhận hàng
            $table->text('note')->nullable();
            $table->integer('sale_id')->nullable();
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
        Schema::dropIfExists('deals');
    }
}

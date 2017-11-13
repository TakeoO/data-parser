<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MerchantDaily extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_daily', function (Blueprint $table) {
            $table->increments('merchant_daily_id');
            $table->string('merchant_id');
            $table->date('analytics_date');
            $table->decimal('sales_total', 10, 2);
            $table->integer('conversions_total', false, true);
            $table->decimal('postpurchase_revenue_total', 10, 2);
            $table->integer('visits_total', false, true);
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
        Schema::dropIfExists('merchant_daily');
    }
}

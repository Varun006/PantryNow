<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCouponColumnScheduledOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scheduledOrders', function (Blueprint $table) {
            $table->addColumn('text','coupon')->nullable();
            $table->addColumn('text','discount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scheduledOrders', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCouponColumnInstantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instantOrders', function (Blueprint $table) {
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
        Schema::table('instantOrders', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->id();

            $table->string("quantity")->nullable();
            $table->string("budget")->nullable();
            $table->enum("calculate_by",['1','2'])->nullable();

            $table->string("january")->nullable();
            $table->string("february")->nullable();
            $table->string("march")->nullable();
            $table->string("april")->nullable();
            $table->string("may")->nullable();
            $table->string("june")->nullable();
            $table->string("july")->nullable();
            $table->string("august")->nullable();
            $table->string("september")->nullable();
            $table->string("october")->nullable();
            $table->string("november")->nullable();
            $table->string("december")->nullable();

            $table->string("website_portal_network_id")->nullable();
            $table->string("type_of_ad_id")->nullable();
            $table->string("format_id")->nullable();

            $table->string("unit_purchase_id")->nullable();
            $table->string("unit_id")->nullable();
            $table->string("unit_price")->nullable();

            $table->string("tax_id")->nullable();

            $table->string("extra_charge_ids")->nullable();

            $table->enum("discount_by",['1','2'])->nullable();
            $table->string("discount")->nullable();

            $table->string("impressions")->nullable();
            $table->string("cpm")->nullable();
            $table->string("ctr")->nullable();
            $table->string("click")->nullable();
            $table->string("cpc")->nullable();
            $table->string("view_rate")->nullable();
            $table->string("cpv")->nullable();
            $table->string("cr")->nullable();
            $table->string("conversions")->nullable();
            $table->string("cpa")->nullable();


//            $table->string("service_id")->nullable();
//            $table->string("platform_placement_id")->nullable();
//            $table->string("format2_id")->nullable();
//            $table->string("agency_fee_id")->nullable();
//            $table->string("calculation_indicator_id")->nullable();

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
        Schema::dropIfExists('counters');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use FelipeMateus\IPTVGatewayPayment\Models\IPTVGateway;

class SeedPaypalConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        IPTVGateway::create([
            'code' => 'paypal',
            'name'=> "Paypal",
            'class_model' => '',
            'config_data' => '',
            'active'=> 1
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        IPTVGateway::where('code','paypal')->delete();
    }
}

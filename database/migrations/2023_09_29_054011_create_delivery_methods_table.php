<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryMethodsTable extends Migration
{

    public function up()
    {
        Schema::create('delivery_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('estimated_time');
            $table->unsignedBigInteger('sum');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('delivery_methods');
    }
}

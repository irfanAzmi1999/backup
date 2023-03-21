<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',500);
            $table->string('content1',500);
            $table->string('content2',500);
            $table->string('content3',500);
            $table->unsignedBigInteger('product_id')->index();
            $table->unsignedBigInteger('service_id')->index();
            $table->foreign('product_id')->references('id')->on('faazmiar_products')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('faazmiar_services')->onDelete('cascade');
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
        Schema::dropIfExists('categories');
    }
};

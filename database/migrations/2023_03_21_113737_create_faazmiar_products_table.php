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
        Schema::create('faazmiar_products', function (Blueprint $table) {
            $table->id();
            $table->string('name',500);
            $table->string('description',2000);
            $table->string('productImage',500);
            $table->string('principleLogo',500)->nullable();
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
        Schema::dropIfExists('faazmiar_products');
    }
};

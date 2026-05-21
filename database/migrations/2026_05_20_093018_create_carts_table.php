<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            
       

        // cake ya accessory
        $table->enum('type', ['cake', 'accessory']);

        // cake/accessory id
        $table->unsignedBigInteger('product_id');

        // product name
        $table->string('product_name');

        // single item price
        $table->integer('price');

        // user selected quantity
        $table->integer('quantity')->default(1);

        // only for cakes
        $table->string('pound')->nullable();

        // total price
        $table->integer('total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};

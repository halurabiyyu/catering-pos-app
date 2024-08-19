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
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('food_id');
            $table->string('kuantitas');
            $table->decimal('harga_satuan', 10, 2);
            $table->timestamps();

            $table->foreign('transaction_id')->references('transaction_id')->on('transactions');
            $table->foreign('food_id')->references('food_id')->on('food');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transactions');
    }
};

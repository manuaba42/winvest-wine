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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->double('sub_total', 8, 2);
            $table->double('total', 8, 2);
            $table->double('payment_made', 8, 2);
            $table->double('balance_due', 8, 2);
            $table->foreignId('invoice_id');
            $table->timestamps();

            $table->foreign('invoice_id')->references('id')->on('invoice');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};

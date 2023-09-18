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
        Schema::create('wine_invoice', function (Blueprint $table) {
            $table->id();
            $table->string('wine');
            $table->string('wine_description');
            $table->integer('qty');
            $table->string('unit');
            $table->double('rate', 8, 2);
            $table->double('discount', 8, 2);
            $table->double('amounts', 8, 2);
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
        Schema::dropIfExists('wine_invoice');
    }
};

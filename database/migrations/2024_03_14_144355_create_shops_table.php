<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('skucode')->default(Str::random(10));
            $table->string('item');
            $table->decimal('price', 10, 2);
            $table->integer('quantity')->default(1);
            $table->string('customer');
            $table->string('transaction_code')->default(Str::random(10));
            $table->timestamp('date_bought');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};

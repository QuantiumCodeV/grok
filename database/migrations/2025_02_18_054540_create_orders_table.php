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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Привязка к пользователю
            $table->decimal('amount', 16, 8); // Сумма в криптовалюте
            $table->string('currency'); // Валюта (BTC, ETH и т.д.)
            $table->integer('tokens'); // Количество токенов
            $table->integer('bonus_tokens'); // Бонусные токены
            $table->integer('total_tokens'); // Всего токенов
            $table->string('status')->default('pending'); // Статус заказа
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

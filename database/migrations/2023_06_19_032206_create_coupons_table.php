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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id()->comment('Идентификатор купона');
            $table->string('code')->comment('Код купона');
            $table->double('value')->comment('Номинал купона');
            $table->boolean('type')->comment('Тип номинала (проценты или абсолютное значение)');
            $table->boolean('only_once')->default(0)->comment('Применение (множественное или одиночное)');
            $table->timestamp('expired_at')->nullable()->comment('Временная метка окончания действия купона');
            $table->text('description')->nullable()->comment('Описание купона');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};

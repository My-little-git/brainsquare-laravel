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
            $table->id()->comment('Идентификатор заказа');
            $table->foreignId('student_id')
                ->comment('Идентификатор студента')
                ->constrained('students')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('status_id')
                ->nullable()
                ->default(1)
                ->comment('Идентификатор статуса')
                ->constrained('statuses')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('coupon_id')
                ->nullable()
                ->comment('Идентификатор купона')
                ->constrained('coupons')
                ->cascadeOnUpdate()
                ->nullOnDelete();
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

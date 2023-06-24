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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id()->comment('Идентификатор занятия');
            $table->foreignId('course_id')
                ->comment('Идентификатор курса')
                ->constrained('courses')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('topic', 40)->comment('Тема занятия')->nullable();
            $table->time('time')->comment('Время');
            $table->date('date')->comment('Дата');
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
        Schema::dropIfExists('lessons');
    }
};

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
        Schema::create('visits', function (Blueprint $table) {
            $table->id()->comment('Идентификатор посещения');
            $table->foreignId('student_id')
                ->comment('Идентификатор студента')
                ->constrained('students')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('lesson_id')
                ->comment('Идентификатор занятия')
                ->constrained('lessons')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->unsignedTinyInteger('mark')->nullable()->comment('Оценка за урок');
            $table->boolean('is_missing')->default(0)->comment('Отсутствовал ли');
            $table->boolean('is_valid')->nullable()->comment('Уважительная ли причина');
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
        Schema::dropIfExists('visits');
    }
};

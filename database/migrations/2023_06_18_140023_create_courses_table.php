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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->comment('Название курса');
            $table->foreignId('subject_id')
                ->comment('Идентификатор предмета')
                ->constrained('subjects')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('course_type_id')
                ->nullable()
                ->comment('Идентификатор типа курса')
                ->constrained('course_types')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('audience_id')
                ->comment('Идентификатор аудитории')
                ->constrained('audiences')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('teacher_id')
                ->comment('Идентификатор учителя')
                ->constrained('teachers')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->unsignedTinyInteger('seats')->comment('Количество мест');
            $table->unsignedTinyInteger('lessons')->comment('Количество занятий');
            $table->unsignedInteger('price')->comment('Цена курса');
            $table->date('start_at')->comment('День начала курса');
            $table->date('end_at')->comment('День конца курса');
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
        Schema::dropIfExists('courses');
    }
};

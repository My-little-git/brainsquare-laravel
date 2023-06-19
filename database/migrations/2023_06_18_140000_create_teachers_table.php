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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id()->comment('Идентификатор учителя');
            $table->string('avatar')->default('avatars/no-image.png')->comment('Путь до фотографии');
            $table->string('name', 60)->comment('Имя учителя');
            $table->string('surname', 70)->comment('Фамилия учителя');
            $table->date('birthday')->comment('День рождения учителя');
            $table->string('email')->unique()->comment('Электронная почта учителя');
            $table->timestamp('email_verified_at')->nullable()->comment('Временная метка когда учитель подтвердил почту');
            $table->string('phone', 11)->unique()->comment('Номер телефона учителя');
            $table->string('password')->comment('Пароль учителя');
            $table->foreignId('education_id')
                ->nullable()
                ->comment('Идентификатор образования')
                ->constrained('educations')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->rememberToken();
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
        Schema::dropIfExists('teachers');
    }
};

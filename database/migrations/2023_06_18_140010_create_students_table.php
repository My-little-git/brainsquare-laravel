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
        Schema::create('students', function (Blueprint $table) {
            $table->id()->comment('Идентификатор студента');
            $table->string('avatar')->default('avatars/no-image.png')->comment('Путь до фотографии');
            $table->string('name', 60)->comment('Имя студента');
            $table->string('surname', 70)->comment('Фамилия студента');
            $table->string('patronymic', 60)->comment('Отчество студента');
            $table->date('birthday')->comment('День рождения студента');
            $table->string('phone', 11)->unique()->comment('Номер телефона студента');
            $table->string('email')->unique()->comment('Электронная почта студента');
            $table->timestamp('email_verified_at')->nullable()->comment('Временная метка когда студент подтвердил почту');
            $table->string('password')->comment('Пароль студента');
            $table->text('note')->nullable()->comment('Характеристика студента');
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
        Schema::dropIfExists('students');
    }
};

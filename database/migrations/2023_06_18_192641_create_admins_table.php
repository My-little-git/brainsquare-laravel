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
        Schema::create('admins', function (Blueprint $table) {
            $table->id()->comment('Идентификатор админа');
            $table->string('email')->unique()->comment('Электронная почта админа');
            $table->timestamp('email_verified_at')->nullable()->comment('Временная метка когда админ подтвердил почту');
            $table->string('password')->comment('Пароль админа');
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
        Schema::dropIfExists('admins');
    }
};

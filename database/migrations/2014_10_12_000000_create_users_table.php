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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('image')->default('fp.png');
            $table->string('username');
            $table->string('nia');
            $table->bigInteger('telp');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['ranting', 'cabang', 'admin']);
            $table->string('ranting')->nullable();
            $table->string('cabang')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('verified',['register','user'])->default('register');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

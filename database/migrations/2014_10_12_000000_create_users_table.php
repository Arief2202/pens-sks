<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('nip')->unique()->nullable();
            $table->string('nama');
            $table->string('alias')->nullable();
            $table->string('email')->unique();
            $table->string('password')->default('$2y$10$JUUKFmyB9pWCIAcTjC12QOT5XdV7t8peTA3.zbNvaUUj.pwGwBVq.');
            $table->integer('bebanMengajar')->default('0');
            $table->integer('role')->default('2');
            $table->integer('darkMode')->default('0');
            $table->integer('openSideBar')->default('1');
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}

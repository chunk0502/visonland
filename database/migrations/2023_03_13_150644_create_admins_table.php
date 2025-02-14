<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->id();
            $table->char('username', 100)->nullable();
            $table->string('fullname')->nullable();
            $table->string('email')->unique()->nullable();
            $table->char('phone', 20)->unique()->nullable();
            $table->date('birthday')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->text('avatar')->nullable();
            $table->text('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->tinyInteger('roles');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('admins')->insert([
            'username' => 'admin',
            'fullname' => 'Admin',
            'email' => 'admin@gmail.com',
            'avatar' => config('custom.images.avatarUser'),
            'password' => bcrypt('123456'),
            'roles' => 1
        ]);
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

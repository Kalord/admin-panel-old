<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;
use Illuminate\Support\Facades\Hash;

class CreateAdminUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_admin_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 30)->unique();
            $table->string('avatar')->default('uploads/admin/avatars/default.png');
            $table->string('login', 30)->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->integer('verify_email')->default(0);
            $table->string('token');
            $table->integer('status')->default(0);
            $table->integer('id_rule')->default(1);
        });

        $this->createDefaultUser();
    }

    public function createDefaultUser()
    {
        User::create([
            'name'          => 'Developer',
            'login'         => 'dev001',
            'password'      => Hash::make('HNJSQ4LmgA'),
            'email'         => 'artem.tyutnev.developer@gmail.com',
            'verify_email'  => 1,
            'token'         => Hash::make(time()),
            'status'        => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_admin_user');
    }
}

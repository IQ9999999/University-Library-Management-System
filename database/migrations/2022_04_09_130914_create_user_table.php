<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->enum("role", ["STUDENT", "LECTURER", "ADMIN"]);
            $table->string("email")->unique();
            $table->string("telephone");
            $table->string("password");
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};

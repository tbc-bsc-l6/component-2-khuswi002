<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('admin_id');  // Primary key with custom name
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();  // Email must be unique
            $table->string('password');
            $table->timestamps();  // Created at and Updated at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }

};

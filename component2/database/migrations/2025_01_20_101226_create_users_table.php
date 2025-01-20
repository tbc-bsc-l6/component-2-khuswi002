<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Users table
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('email')->unique(); // Email column with unique constraint
            $table->string('password'); // Password column
            $table->enum('role', ['admin', 'customer']);
            $table->timestamps(); // Created at and Updated at timestamps
        });

        // Password reset tokens table
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Email serves as the primary key
            $table->string('token'); // Reset token
            $table->timestamp('created_at')->nullable(); // Timestamp for when the token was created
        });

        // Sessions table
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Session ID as the primary key
            $table->foreignId('user_id')->nullable()->index(); // Foreign key to the users table
            $table->string('ip_address', 45)->nullable(); // IP address of the user
            $table->text('user_agent')->nullable(); // User agent of the session
            $table->longText('payload'); // Session data
            $table->integer('last_activity')->index(); // Last activity timestamp
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};

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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // References the 'users' table
            $table->decimal('amount', 8, 2); // The payment amount
            $table->string('payment_method'); // Example: 'Credit Card', 'PayPal', etc.
            $table->string('transaction_id')->unique(); // The transaction ID from the payment gateway
            $table->string('payment_status'); // Example: 'Pending', 'Completed', 'Failed'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

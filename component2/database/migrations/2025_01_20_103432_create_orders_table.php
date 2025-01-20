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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // References 'users' table
            $table->decimal('total_amount', 8, 2); // The total amount for the order
            $table->string('order_status'); // Example values: 'Pending', 'Completed', 'Shipped'
            $table->string('payment_status'); // Example values: 'Paid', 'Unpaid'
            $table->string('shipping_address'); // Shipping address for the order
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

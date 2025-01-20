<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\User;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create([
            'user_id' => 1,
            'amount' => 29.99,
            'payment_method' => 'Credit Card',
            'transaction_id' => 'TX123456789',
            'payment_status' => 'Completed',
        ]);
    }
}

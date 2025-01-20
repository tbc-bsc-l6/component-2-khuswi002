<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'user_id' => 1,
            'total_amount' => 200.00,
            'order_status' => 'Completed',
            'payment_status' => 'Paid',
            'shipping_address' => '456 Another St, Some City, Some Country',
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_amount',
        'order_status',
        'payment_status',
        'shipping_address',
    ];

    // Defining the relationship with the User model (a user can have many orders)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

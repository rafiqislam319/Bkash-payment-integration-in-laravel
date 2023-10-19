<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'shipping_address',
        'total_product',
        'amount',
        'order_status'


    ];

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
}

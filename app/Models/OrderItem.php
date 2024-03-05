<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'item_type', 'item_id', 'quantity'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Define a polymorphic relationship with items (e.g., burgers, fries, drinks)
    public function item()
    {
        return $this->morphTo();
    }
}

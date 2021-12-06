<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function details()
    {
        return $this->hasMany(Product::class, 'product_id');
    }
    public function updatetotal($itemcart, $subtotal)
    {
        $this->attribute['subtotal'] = $itemcart->subtotal + $subtotal;
        $this->attribute['total'] = $itemcart->total + $subtotal;
        self::save();
    }
}

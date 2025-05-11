<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'user_id', 'amount', 'currency', 'tokens', 'bonus_tokens', 'total_tokens', 'status'
    ];

    public static function generateOrderId() {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        do {
            $randomString = '';
            for ($i = 0; $i < 9; $i++) {
                $randomString .= $characters[rand(0, strlen($characters) - 1)];
            }
        } while (self::where('order_id', $randomString)->exists());

        return $randomString;
    }

    protected static function boot() {
        parent::boot();
        static::creating(function ($order) {
            $order->order_id = self::generateOrderId();
        });
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

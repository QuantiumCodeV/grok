<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'balance',
        'status',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getStatusAttribute()
    {
        if ($this->balance >= 50000) {
            return 'Legendary Status';
        } elseif ($this->balance >= 25000) {
            return 'Diamond Status';
        } elseif ($this->balance >= 5000) {
            return 'Platinum Status';
        } elseif ($this->balance >= 1000) {
            return 'Gold Status';
        } elseif ($this->balance >= 250) {
            return 'Silver Status';
        } elseif ($this->balance >= 100) {
            return 'Bronze Status';
        } else {
            return null;
        }
    }

    public function getNextStatusAttribute()
    {
        $statuses = [
            ['threshold' => 100, 'name' => 'Bronze Status'],
            ['threshold' => 250, 'name' => 'Silver Status'],
            ['threshold' => 1000, 'name' => 'Gold Status'],
            ['threshold' => 5000, 'name' => 'Platinum Status'],
            ['threshold' => 25000, 'name' => 'Diamond Status'],
            ['threshold' => 50000, 'name' => 'Legendary Status'],
        ];

        foreach ($statuses as $status) {
            if ($this->balance < $status['threshold']) {
                return $status['name'];
            }
        }

        // Если баланс больше или равен максимальному порогу, следующего статуса нет
        return null;
    }

    /**
     * Возвращает прогресс (в процентах) до следующего статуса.
     * Например, если у пользователя баланс 1200, то до следующего статуса (Platinum) нужно 5000-1000=4000,
     * а прогресс: (1200-1000)/(5000-1000) = 0.05 = 5%
     */
    public function getStatusProgressAttribute()
    {
        $statuses = [
            ['threshold' => 100, 'name' => 'Bronze Status'],
            ['threshold' => 250, 'name' => 'Silver Status'],
            ['threshold' => 1000, 'name' => 'Gold Status'],
            ['threshold' => 5000, 'name' => 'Platinum Status'],
            ['threshold' => 25000, 'name' => 'Diamond Status'],
            ['threshold' => 50000, 'name' => 'Legendary Status'],
        ];

        $currentThreshold = 0;
        $nextThreshold = null;

        foreach ($statuses as $status) {
            if ($this->balance < $status['threshold']) {
                $nextThreshold = $status['threshold'];
                break;
            }
            $currentThreshold = $status['threshold'];
        }

        // Если пользователь уже достиг максимального статуса
        if ($nextThreshold === null) {
            return 100;
        }

        $progress = 0;
        $range = $nextThreshold - $currentThreshold;
        if ($range > 0) {
            $progress = (($this->balance - $currentThreshold) / $range) * 100;
        }

        // Гарантируем, что прогресс в диапазоне 0-100
        if ($progress < 0) $progress = 0;
        if ($progress > 100) $progress = 100;

        return round($progress);
    }
    
    
}

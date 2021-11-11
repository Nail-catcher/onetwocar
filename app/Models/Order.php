<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    public function car(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
    public function botUser(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(BotUser::class, 'user_id');
    }
    public function set(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Set::class);
    }
}

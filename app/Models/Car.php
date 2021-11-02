<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function set(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Set::class);
    }
    public function engine(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Engine::class);
    }
    public function transmission(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Transmission::class);
    }
    public function wd(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(wd::class);
    }
    public function city(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(City::class);
    }
    public function mark(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Mark::class);
    }
}

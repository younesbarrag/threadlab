<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blueprint extends Model
{
    protected $fillable = [
        'user_id',
        'nom',
        'ton',
        'max_hashtags',
        'max_caracteres',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
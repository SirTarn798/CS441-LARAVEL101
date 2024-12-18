<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Song extends Model
{
    use HasFactory, SoftDeletes;

    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    // Accessor
    public function durationToString(): Attribute
    {
        $minute = (int) ($this->duration / 60);
        $second = $this->duration % 60;
        $second = Str::padLeft($second, 2, '0');
        return Attribute::make(
            get: fn() => "{$minute}:{$second}"
        );
    }
}
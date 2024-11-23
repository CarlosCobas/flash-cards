<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /** @use HasFactory<\Database\Factories\TopicFactory> */
    use HasFactory;

    public function cards() {
        return $this->hasMany(Card::class);
    }

    public function subject() {
        return $this->belongsTo(Subject::class);
    }
}

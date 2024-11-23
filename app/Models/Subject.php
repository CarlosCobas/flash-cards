<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;

    public function topics() {
        return $this->hasMany(Topic::class);
    }

    public function cards() {
        return $this->hasManyThrough(
            Card::class,
            Topic::class,
        );
    }
}

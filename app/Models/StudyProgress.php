<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudyProgress extends Model
{
    /** @use HasFactory<\Database\Factories\StudyProgressFactory> */
    use HasFactory;

    protected $fillable = [
        'interval',
        'e_factor',
        'next_date_to_show',
    ];

    public function __construct($attributes = []) {
        parent::__construct($attributes);
        $this->interval = 0;
        $this->e_factor = 2.5;
        $this->next_date_to_show = Carbon::today()->addDays(1);
    }

    public function card() {
        return $this->belongsTo(Card::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudySessionRecord extends Model
{
    /** @use HasFactory<\Database\Factories\StudySessionRecordFactory> */
    use HasFactory;

    protected $fillable = [
        'response',
        'response_date',
        'e_factor',
        'interval',
        'study_session_id',
        'card_id',
    ];

    public function card() {
        return $this->belongsTo(Card::class);
    }

    public function studySession() {
        return $this->belongsTo(StudySession::class);
    }

    // public function user() {
    //     return $this->hasOneThrough()
    // }
}

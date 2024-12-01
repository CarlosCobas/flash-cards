<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudySession extends Model
{
    /** @use HasFactory<\Database\Factories\StudySessionFactory> */
    use HasFactory;

    protected $fillable = ['is_completed', 'completed_date', 'session_date'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function studySessionRecords() {
        return $this->hasMany(StudySessionRecord::class);
    }

}

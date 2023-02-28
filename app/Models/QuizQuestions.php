<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestions extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string> 
     */
    protected $fillable = [
        'quiz_id',
        'question_id',
        'value'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}

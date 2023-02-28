<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string> 
     */
    protected $fillable = [
        'result',
        'questions_list',
    ];

    public function quizQuestions()
    {
        return $this->hasMany(QuizQuestions::class);
    }
}

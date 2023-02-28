<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string> 
     */
    protected $fillable = [
        'text',
        'image',
    ];

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }

    public function quizQuestions()
    {
        return $this->hasMany(QuizQuestions::class);
    }

    public static function getQuestions()
    {
        $quizResultGet = QuizQuestions::orderBy('id', 'desc')->take(10)->pluck('question_id')->toArray();
        return Question::whereNotIn('id', $quizResultGet)->get()->random(10);
    }
}

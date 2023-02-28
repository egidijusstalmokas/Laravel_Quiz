<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizQuestions;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Support\Str;

class QuizQuestionsController extends Controller
{
    public function question()
    {
        $questionNumber = 1;
        $quizQuestion = QuizQuestions::orderBy('id', 'desc')->first();
        $quizResultGet = QuizQuestions::orderBy('id', 'desc')->take(10)->get();
        return view('front.quiz.play', compact('quizQuestion', 'questionNumber', 'quizResultGet'));
    }

    public function nextQuestion(QuizQuestions $quizQuestion, $questionNumber, $value)
    {
        $quizQuestion->value = $value;
        $quizQuestion->save();
        $quiz = Quiz::orderBy('id', 'desc')->first();
        $quizResultGet = QuizQuestions::orderBy('id', 'desc')->take(10)->get();
        $quizResult = $quizResultGet->where('value', 1)->count();
        $quiz->result = $quizResult;
        $quiz->save();
        $quizQuestion = QuizQuestions::orderBy('id', 'desc')->skip($questionNumber)->first();
        $questionNumber += 1;
        return view('front.quiz.play', compact('quizQuestion', 'questionNumber', 'quizResult', 'quizResultGet'));
    }

    public function resultQuestion(QuizQuestions $quizQuestion, $questionNumber, $value)
    {
        $quizQuestion->value = $value;
        $quizQuestion->save();
        $quiz = Quiz::orderBy('id', 'desc')->first();
        $quizResult = $value + $quiz->result;
        $quiz->result = $quizResult;
        $quiz->save();
        if($quizResult == 10){
            $prize = Str::random(7);
        } else {
            $prize = '0';
        }
        return view('front.quiz.result', compact('quizResult', 'prize'));
    }
}

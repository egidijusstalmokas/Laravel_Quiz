<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizQuestions;

class QuizController extends Controller
{
    public function play()
    {
        $questions = Question::getQuestions();
        //Getting all id's of questions
        foreach($questions as $question){
            $questions_ids[] = $question->id;
        }
        $quiz = new Quiz();
        $quiz->questions_list = json_encode($questions_ids);
        $quiz->save();

        foreach($questions as $question){
            $quiz_question = new QuizQuestions();
            $quiz_question->quiz_id = $quiz->id;
            $quiz_question->question_id = $question->id;
            $quiz_question->save();
        }
        return redirect()->route('quizQuestion.question');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Answer;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::select('id', 'text')->get();
        return view('admin.quiz.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = "Question was created successfully";
        $validator = Validator::make($request->all(), [ 
            'text' => 'required|string',
            'image' => 'mimes:jpeg,png,jpg,gif,svg,webp',
            'answer_a' => 'string',
            'answer_b' => 'string',
            'answer_c' => 'string',
            'correct_answer' => 'string',
        ]);

        $messages = $validator->errors();
        if($messages->isEmpty()){
            $question = new Question();
            $question->text = $request->text;
            if($request->has('image')){
                $imageName = time().'.'.$request->image->extension();  
                $request->image->move('quiz/', $imageName);
                $question->image = $imageName;
            }
            $question->save();

            // Answer A
            $answerA = new Answer();
            $answerA->text = $request->answer_a;
            if($request->correct_answer == 'A'){
                $answerA->value = true;
            }else{
                $answerA->value = false;
            }
            $answerA->question_id = $question->id;
            $answerA->save();

            // Answer B
            $answerB = new Answer();
            $answerB->text = $request->answer_b;
            if($request->correct_answer == 'B'){
                $answerB->value = true;
            }else{
                $answerB->value = false;
            }
            $answerB->question_id = $question->id;
            $answerB->save();

            // Answer C
            $answerC = new Answer();
            $answerC->text = $request->answer_c;
            if($request->correct_answer == 'C'){
                $answerC->value = true;
            }else{
                $answerC->value = false;
            }
            $answerC->question_id = $question->id;
            $answerC->save();
            
            return redirect()->back()->with('success', $message);
        }else {
            $message = "Pateikti duomenys neteisingi, patikrinkikte ir pabandykite iš naujo.";
            return redirect()->back()->with('error', $message); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}

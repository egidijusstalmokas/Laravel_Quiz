<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;

class AdminController extends Controller
{
    public function desk() 
    {
        $lastQuestions = Question::latest()->take(10)->get();
        $lastQuizes = Quiz::latest()->take(10)->get();
        return view('admin.desk', compact('lastQuestions', 'lastQuizes'));
    }
}

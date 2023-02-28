@include('front.layouts.header')
<div class="bg-grey">
    <div class="main-content-section">
        <div class="row">
            <div class="padding-left-6 pr-5 width-37">
                <div class="row mb-5">
                    <div class="col-12">
                        <button class="quiz-result">
                            Current score:
                            <img class="pl-2 pr-2" src="{{ asset('imgs/icons/like.png') }}" alt="">{{ isset($quizResult) ? $quizResult : '0'  }}
                            <img class="pl-2 pr-2" src="{{ asset('imgs/icons/dislike.png') }}" alt="">{{ isset($quizResult) ? $questionNumber - $quizResult - 1 : '0' }}
                        </button>
                    </div>
                </div>

                @foreach($quizResultGet as $quizR) 
                <div class="row mt-3">
                    <div class="col-9">
                        <button class="quiz-question {{ $loop->iteration == $questionNumber ? 'quiz-question-active' : '' }} text-left">
                            {{ $loop->iteration }} Question
                        </button>
                    </div>
                    <div class="col-3 pl-2">
                        @if($loop->iteration == $questionNumber)
                        <button class="quiz-question quiz-question-active">
                            <img src="{{ asset('imgs/icons/user-bin.png') }}" alt="">
                        </button>
                        @elseif($loop->iteration > $questionNumber)
                        <button class="quiz-question">
                            <img style="visibility: hidden" src="{{ asset('imgs/icons/user-bin.png') }}" alt="">
                        </button>
                        @else
                        <button class="quiz-question">
                            <img style="opacity: 0.25" src="{{ $quizR->value == 1 ? asset('imgs/icons/like.png') : asset('imgs/icons/dislike.png') }}" alt="">
                        </button>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="width-60 pt-5 pl-5 pb-5 top-border-2 border-left-2 pr-5">
                <img class="w-100 pl-4"  src="{{ isset($quizQuestion->question->image) ? asset('quiz') . '/' . $quizQuestion->question->image : asset('quiz/random') . '/' . $randomImg->img }}" alt="">
                <p class="mt-4 pl-4 text-25-30-600">{{ $quizQuestion->question->text }}</p>
                <button id="A" onclick="nextQuestion({{ $quizQuestion->question->answer[0]->value }}, 'A')" class="{{  $quizQuestion->question->answer[0]->value == 1 ? 'correct_answer' : '' }} quiz-question-answer ml-4 mt-5 w-100">A) {{ $quizQuestion->question->answer[0]->text }}</button>
                <button id="B" onclick="nextQuestion({{ $quizQuestion->question->answer[1]->value }}, 'B')" class="{{  $quizQuestion->question->answer[1]->value == 1 ? 'correct_answer' : '' }} quiz-question-answer ml-4 mt-4 w-100">B) {{ $quizQuestion->question->answer[1]->text }}</button>
                <button id="C" onclick="nextQuestion({{ $quizQuestion->question->answer[2]->value }}, 'C')" class="{{  $quizQuestion->question->answer[2]->value == 1 ? 'correct_answer' : '' }} quiz-question-answer ml-4 mt-4 w-100">C) {{ $quizQuestion->question->answer[2]->text }}</button>
            </div>
        </div>
    </div>
    <script>
        function nextQuestion(value, id) {
            var selectedAnswer = document.getElementById(id);
           
            if(value == 0){
                selectedAnswer.classList.add("quiz-question-answer-negative");  
            
                setTimeout(function() {
                    var correct_answer = document.getElementsByClassName("correct_answer");
                    correct_answer[0].classList.add("quiz-question-answer-positive");

                        setTimeout(function() {
                            if({{ $questionNumber }} < 10) {
                            window.open("{{ route('quizQuestion.nextQuestion', ['quizQuestion'=>$quizQuestion,'questionNumber'=>$questionNumber, 'value'=>0]) }}","_self")
                            } else {
                                window.open("{{ route('quizQuestion.resultQuestion', ['quizQuestion'=>$quizQuestion,'questionNumber'=>$questionNumber, 'value'=>0]) }}","_self")
                            }
                    }, 2000);

                }, 3000);
            } else if(value == 1) {
                selectedAnswer.classList.add("quiz-question-answer-positive");
                    setTimeout(function() {
                            if({{ $questionNumber }} < 10) {
                            window.open("{{ route('quizQuestion.nextQuestion', ['quizQuestion'=>$quizQuestion,'questionNumber'=>$questionNumber, 'value'=>1]) }}","_self")
                            } else {
                                window.open("{{ route('quizQuestion.resultQuestion', ['quizQuestion'=>$quizQuestion,'questionNumber'=>$questionNumber, 'value'=>1]) }}","_self")
                            }
                    }, 3000);
            }
        }
    </script>
</div>

@include('front.layouts.footer')
 
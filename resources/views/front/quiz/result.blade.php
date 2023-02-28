@include('front.layouts.header')
<hr style="margin-top:0px; margin-bottom:0px; margin-right:14vw;">
<div class="bg-grey">
    <div class="main-content-section-without-padding">
        <div class="quiz-section">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="row">
                        <div class="col">
                            <button class="quiz-result">
                                Current score:
                                <img class="pl-2 pr-2" src="{{ asset('imgs/icons/like.png') }}" alt="">{{ isset($quizResult) ? $quizResult : '0'  }}
                                <img class="pl-2 pr-2" src="{{ asset('imgs/icons/dislike.png') }}" alt="">{{ isset($quizResult) ? 10 - $quizResult : '0' }}
                            </button>
                        </div>
                    </div>
                    @if($quizResult == 10)
                    <div class="row mt-5">
                        <div class="col text-center">
                            <p class="text-25-30-600 mt-4">Congratulations! You have won the prize. You can claim the prize by presenting the following code at the:</p>
                        </div>
                    </div>
                    <div class="row mt-5 pt-4 mb-5">
                        <div class="col-12 text-center mb-4">
                            <p style="font-weight: 600;font-size: 50px;line-height: 61px;" class="mt-4">{{ $prize }}</p>
                        </div>
                    </div>
                    @else
                    <div class="row mt-5">
                        <div class="col text-center">
                            <p class="text-25-30">It took very little to win the prize</p>
                            <p class="text-25-30-600 mt-4">Maybe you want to try again?</p>
                        </div>
                    </div>
                    <div class="row mt-5 pt-4 mb-5">
                        <div class="col-12 text-center mb-4">
                             <a href="{{ route('quiz.play') }}"><button class="black-button">
                               <img class="mr-3" src="{{ asset('imgs/icons/restart.png') }}" alt="">
                               Try again
                            </button></a>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-3"></div>
            </div>
            
            <div class="row mt-5 pt-4">
                <div class="col-12 text-center">
                    <a href="{{ route('quiz') }}"><button class="white-button">
                        <img class="mr-3" src="{{ asset('imgs/icons/home.png') }}" alt="">
                        Return to the main window
                    </button></a>
                </div>
            </div>
        </div>
    </div>
</div>            
@include('front.layouts.footer')
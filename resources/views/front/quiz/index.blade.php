@include('front.layouts.header')
<hr style="margin-top:0px; margin-bottom:0px; margin-right:14vw;">
<div class="bg-grey">
    <div class="main-content-section-without-padding">
        <div class="quiz-section">
            <div class="row">
                <div class="col">
                    <div class=" quiz-info text-center">
                        The quiz consists of 10 questions. Each question has three possible answer options, only one of which is correct
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <p class="text-25-30-600">Answer all the questions correctly and you will win prizes from the Lithuanian Aviation Museum!</p>
                </div>
            </div>
            <div class="row mt-5 pt-4 text-uppercase font-weight-bold text-20-24">
                <div class="col-3"></div>
                <div class="col-2 text-center">
                    <img class="mb-3 " src="{{ asset('imgs/icons/check.png') }}" alt=""><br>
                    10 <br> Questions
                </div>
                <div class="col-2 text-center">
                    <img class="mb-3" src="{{ asset('imgs/icons/time.png') }}" alt=""><br>
                    NO  <br> TIME LIMIT
                </div>
                <div class="col-2 text-center">
                    <img class="mb-3" src="{{ asset('imgs/icons/gift.png') }}" alt=""><br>
                    ONE <br> PRIZE
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-5 pt-4">
                <div class="col-12 text-center mb-4">
                    <a href=""><button class="black-button">
                        <img class="mr-3" src="{{ asset('imgs/icons/play.png') }}" alt="">
                        Start the quiz
                    </button></a>
                </div>
            </div>
        </div>
    </div>
</div> 
@include('front.layouts.footer')
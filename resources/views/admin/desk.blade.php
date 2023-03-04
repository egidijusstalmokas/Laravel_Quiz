@include('admin.layouts.header')
<main class="mx-lg-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-m-white p-4 mb-5">
                    <table class="table cursor_pointer">
                    <h5 class="text-uppercase font-weight-bold">Last 10 uploaded questions</h5>
                        <thead>
                            <tr>
                                <th class="font-weight-bold" scope="col-1">#</th>
                                <th class="font-weight-bold" scope="col">Questions</th>
                                <th class="font-weight-bold" scope="col">Used times</th>
                            </tr>
                        </thead> 
                        <tbody> 
                            @foreach($lastQuestions as $lastQuestion)
                            <tr>
                                <th scope="row"><a href="">{{ $loop->iteration }}</a></th>
                                <td><a href="">{{ $lastQuestion->text }}</a></td>
                                <td><a href="">{{ $lastQuestion->quizQuestions->count() }}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>                   
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card-m-white p-4 mb-5">
                    <table class="table cursor_pointer">
                    <h5 class="text-uppercase font-weight-bold">Last 10 quizes</h5>
                        <thead>
                            <tr>
                                <th class="font-weight-bold" scope="col-1">#</th>
                                <th class="font-weight-bold" scope="col">Quiz date</th>
                                <th class="font-weight-bold" scope="col">Correct answers</th>
                            </tr>
                        </thead> 
                        <tbody> 
                            @foreach($lastQuizes as $lastQuiz)
                            <tr>
                                <th scope="row"><a href="">{{ $loop->iteration }}</a></th>
                                <td><a href="">{{ $lastQuiz->updated_at }}</a></td>
                                <td><a href="">{{ $lastQuiz->result == null ? 'NC'  : $lastQuiz->result }}</a></td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    <div>
</main>
@include('admin.layouts.footer')
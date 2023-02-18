<!--Header-->
@include('admin.layouts.header')
<!--Header-->
<!--Main-->
<main class="mx-lg-5">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12">
                <div class="card-m-white p-4 mb-5">
                    <div class="row">
                        <div class="col-8">
                            <h4>Questions</h4>
                        </div>
                        <div class="col-4">
                            <a href="{{ route('question.create') }}"><button class="btn main-button col-12">Add question</button></a>
                        </div>
                        <div class="col-12 pt-4">
                            @include('admin.messages.message')
                            <table class="table cursor_pointer">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold" scope="col-1">#</th>
                                        <th class="font-weight-bold" scope="col">Question</th>
                                        <th class="font-weight-bold" scope="col">Number of answer options</th>
                                        <th class="font-weight-bold" scope="col">Actions</th>
                                    </tr>
                                </thead> 
                                <tbody>
                                    @foreach($questions as $question)
                                    <tr>
                                        <th scope="row"><a href="">{{ $loop->iteration }}</a></th>
                                        <td><a href="">{{ $question->text }}</a></td>
                                        <td><a href="">{{ $question->answer->count() }}</a></td>
                                        <td><a href="{{ route('question.edit', $question) }}">Edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>           
<!--Main-->
<!--Footer-->
@include('admin.layouts.footer')
<!--Footer-->
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
                        <div class="col-12">
                            <h4>Add question</h4>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            @include('admin.messages.message')
                            <form action="{{ route('question.store') }}" method="POST" enctype="multipart/form-data">
                                @CSRF
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="text_lt">Question</label>
                                        <input class="form-control auth-form mb-4" type="text" name="text" placeholder="Insert question" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="image">Add image</label>
                                        <input class="form-control auth-form mb-4" type="file" name="image">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="">Answer A</label>
                                        <input class="form-control auth-form mb-1" type="text" name="answer_a" placeholder="Insert answer A" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="">Answer B</label>
                                        <input class="form-control auth-form mb-1" type="text" name="answer_b" placeholder="Insert answer B" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="">Answer C</label>
                                        <input class="form-control auth-form mb-1" type="text" name="answer_c" placeholder="Insert answer C" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="correct_answer">Correct answer</label>
                                        <select class="form-control auth-form mb-4" name="correct_answer" required>
                                            <option value="">Please select correct answer:</option>
                                            <option value="A">Answer A</option>
                                            <option value="B">Answer B</option>
                                            <option value="C">Answer C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn main-button col-12">Save</button>
                                    </div>
                                </div>
                            </form>
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
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
                            <h4>Info</h4>
                            <hr>
                            @include('admin.messages.message')
                        </div>
                        <div class="col-12">
                        <form action="{{ route('settings.updateInfo') }}" method="POST">
                            @CSRF
                            <div class="row">
                                <div class="col-12">
                                    <label for="text_lt">Project title</label>
                                    <input class="form-control auth-form mb-4" type="text" name="title" value="{{ $title->value }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="text_lt">Contact email</label>
                                    <input class="form-control auth-form mb-4" type="email" name="email" value="{{ $email->value }}" required>
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

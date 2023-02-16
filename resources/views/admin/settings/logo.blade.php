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
                            <h4>Logo</h4>
                            <hr>
                            @include('admin.messages.message')
                        </div>
                        <div class="col-12">
                        <form action="{{ route('settings.updateLogo') }}" method="POST" enctype="multipart/form-data">
                            @CSRF
                            <div class="row">
                                <div class="col-6">
                                    <label for="text_lt">Select logotype</label>
                                    <input class="form-control auth-form mb-4" type="file" name="logo" required>
                                </div>
                                <div class="col-6">
                                    <img style="width:350px; height:auto;" src="{{ asset('logo') }}/{{ $logo->value }}" alt="">
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

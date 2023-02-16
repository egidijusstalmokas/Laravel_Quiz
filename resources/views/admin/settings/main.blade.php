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
                            <h4>Settings</h4>
                            <hr>
                        </div>
                        <div class="col-12">
                            <a class="h5 pl-2 m-black" href="{{ route('settings.info') }}"><i class="fa-solid fa-circle-info mr-3"></i> Main info</a>
                            <hr>
                        </div>
                        <div class="col-12">
                            <a class="h5 pl-2 m-black" href="{{ route('settings.logo') }}"><i class="fa-sharp fa-solid fa-images mr-3"></i> Logo</a>
                            <hr>
                        </div>
                        <div class="col-12">
                            <a class="h5 pl-2 m-black" href="{{ route('settings.editImages') }}"><i class="fa-regular fa-image mr-3"></i> Images</a>
                            <hr>
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


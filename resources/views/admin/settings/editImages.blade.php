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
                            <h4>Images for quiz</h4>
                            <div class="alert alert-secondary" role="alert">
                            <i class="fa-solid fa-circle-info mr-3"></i>
                            These illustrations will randomly appear next to each question that does not have its own pictures. There is no limit to the number of illustrations that can be placed!
                            </div>
                            @include('admin.messages.message')
                            <hr>
                        </div>
                    </div>
                   @if(!$quizImages->isEmpty())
                    <div class="row pt-4 pb-4">
                        @foreach($quizImages as $quizImage)
                        <div class="col-3">
                            <img style="object-fit: cover; height:75%; width:100%; border:1px solid grey;" class="mr-1 mb-1" src="{{ asset('quiz/random') }}/{{ $quizImage->img }}" alt="">
                            <a class="d-block" href="{{ route('settings.destroyImage', $quizImage) }}">Remove</a>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('settings.storeImages') }}" method="POST" enctype="multipart/form-data">
                                @CSRF
                                <div class="col-12 mb-3">
                                    <div id="container"></div>
                                    <a class="w-100 btn main-button" data-toggle="modal" data-target="#add_imagesQuiz" href="#">Add image</a>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn main-button col-12">Add</button>
                                    </div>
                                </div>
                                <script type='text/javascript'>
                                    function addImgs(){
                                        // Generate a dynamic number of inputs
                                        var number = document.getElementById("member").value;
                                        // Get the element where the inputs will be added to
                                        var container = document.getElementById("container");
                                        // Remove every children it had before
                                        while (container.hasChildNodes()) {
                                            container.removeChild(container.lastChild);
                                        }
                                        for (i=0;i<number;i++){
                                            // Append a node with a random text
                                            // container.appendChild(document.createTextNode("Member " + (i+1)));
                                            // Create an <input> element, set its type and name attributes
                                            var label = document.createElement("label");
                                            label.innerHTML = "Iliustracija";

                                            var inputImg = document.createElement("input");
                                            inputImg.type = "file";
                                            inputImg.className = "form-control auth-form mb-4";
                                            inputImg.name = "gallery[]";
                                            inputImg.required = true;

                                            container.appendChild(label);
                                            container.appendChild(inputImg);
                                            // Append a line break 
                                            container.appendChild(document.createElement("br"));
                                        }
                                    }
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.settings.modals.addImages')
</main>           
<!--Main-->
<!--Footer-->
@include('admin.layouts.footer')
<!--Footer-->

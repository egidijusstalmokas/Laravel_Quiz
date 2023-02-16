@if(\Session::has('success'))
    <div class="alert alert-success-m" role="alert">
        {!! \Session::get('success') !!}
    </div>
@elseif(\Session::has('error'))
    <div class="alert alert-error-m" role="alert">
        {!! \Session::get('error') !!}
    </div>
@endif


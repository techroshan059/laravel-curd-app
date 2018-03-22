@include('students.templates.partials.header')
<!-- Container -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        @if(Session::has('message'))
<div class="alert-success">
    <p>{!! Session('message') !!}</p>
</div>
    @endif
            
            @yield('content')

        </div>
    </div>
</div>
@include('students.templates.partials.footer')


@extends('students.templates.master') @section('content')
<h2>Create Data</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<hr>
<a class="btn btn-primary" href="/students">Read Data</a>

{!! Form::open(['id'=>'dataForm','url' => '/students']) !!}
<div class="form-group">
{!! Form::label('name','Name') !!}
{!! Form::text('name',null,['placeholder'=>'Enter Name','class'=>'form-control'])!!}
</div>

<div class="form-group">
{!! Form::label('name','Email') !!}
{!! Form::text('email',null,['placeholder'=>'Enter Email','class'=>'form-control'])!!}
</div>

<div class="form-group">
{!! Form::label('name','facebook url') !!}
{!! Form::text('fb',null,['placeholder'=>'Enter facebook Url','class'=>'form-control'])!!}
</div>

<div class="form-group">
{!! Form::label('name','Mobile') !!}
{!! Form::text('mobile',null,['placeholder'=>'Enter Mobile','class'=>'form-control'])!!}
</div>
{!!Form::submit('Create',['class'=>'btn btn-primary'])!!}
{!!Form::close() !!}
@endsection()
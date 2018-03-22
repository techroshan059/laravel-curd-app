@extends('students.templates.master') @section('content')
<h2>Update Data</h2>
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

{!! Form::open(['id'=>'dataForm','method'=>'PATCH','url' => '/students/'.$student->id]) !!}
<div class="form-group">
{!! Form::label('name','Name') !!}
{!! Form::text('name',$student->name,['placeholder'=>'Enter Name','class'=>'form-control'])!!}
</div>

<div class="form-group">
{!! Form::label('name','Email') !!}
{!! Form::text('email',$student->email,['placeholder'=>'Enter Email','class'=>'form-control'])!!}
</div>

<div class="form-group">
{!! Form::label('name','facebook url') !!}
{!! Form::text('fb',$student->fb,['placeholder'=>'Enter facebook Url','class'=>'form-control'])!!}
</div>

<div class="form-group">
{!! Form::label('name','Mobile') !!}
{!! Form::text('mobile',$student->mobile,['placeholder'=>'Enter Mobile','class'=>'form-control'])!!}
</div>
{!!Form::submit('Update',['class'=>'btn btn-primary'])!!}
{!!Form::close() !!}
@endsection()
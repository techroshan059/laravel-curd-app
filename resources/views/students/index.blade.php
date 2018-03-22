@extends('students.templates.master')
@section('content')


<h2>Read Data</h2>
<hr/>
<a class="btn btn-primary" href="students/create" style="margin-bottom: 15px"> Create New</a>

<table class="table table-bordered" border="1">
    <thead>
        <tr>
            <th style="padding-left: 15px">Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Facebook</th>
            <th>Mobile</th>
            <th>Added date</th>
            <th width="110px;">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td style="padding-left: 15px">{!! $student->id !!}</td>
            <td>{!! $student->name !!}</td>
            <td>{!! $student->email !!}</td>
            <td>{!! $student->fb !!}</td>
            <td>{!! $student->mobile !!}</td>
            <td>{!! $student->created_at !!}</td>
            <td width="110px;">
                <a class="btn btn-success btn-sm" href="{!! '/students/'.$student->id.'/edit' !!}">Edit</a>
                {!! Form::open(['id'=>'deleteform','method'=>'DELETE','url'=>'/students/' . $student->id]) !!}
                {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm'])!!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection()
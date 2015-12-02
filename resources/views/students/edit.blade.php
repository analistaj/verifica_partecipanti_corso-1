@extends('app')

@section('title')
Modifica 
@stop

@section('content')
<h1>Modifica</h1>
<hr />
{!! Form::model($student, ['method' => 'PATCH', 'action' => ['StudentsController@update', $student->id]]) !!}
	@include('students.form', ['submitButtonText' => 'Update', 'create' => false])
{!! Form::close() !!}

@include('errors.list')

@stop
@extends('app')

@section('title')
{{$student->name}}
@stop

@section('content')
<h1><a href="{{action('StudentsController@edit', [$student->id])}}">{{$student->name}}</a></h1>
<ul>
	<li>{{$student->email}}</li>
	<li>{{$student->id}}</li>
	<li>{{$student->telephone}}</li>
	<li>{{$student->password}}</li>
</ul>

<p>{!! Form::open(['action' => ['StudentsController@destroy', $student->id], 'method' => 'delete']) !!}
{!! Form::submit('Cancella', array('class' => 'btn btn-danger')) !!}
{!! Form::close() !!}
</p>



	<a href="{{action('StudentsController@edit', [$student->id])}}" button type="button" class="btn btn-default btn-lg">  
	<span class="glyphicon glyphicon-star" aria-hidden="true"></span> MODIFICA </a>

 

@stop
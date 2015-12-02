@extends('app')

@section('title')
Partecipanti Corso Programmatore
@stop

@section('content')
<h1>Studenti</h1>



@if (count($students))
<table class="table table-striped" >
<tr>
    <th>Nome</th>
    <th>Email</th>		
    <th>Telefono</th>
    <th></th>
    <th></th>

  </tr>
@foreach ($students as $student)

  <tr>
    <td><a href="{{action('StudentsController@show', [$student->id])}}">{{$student->name}}</a> </td>
    <td>{{$student->email}}</td> 
    <td>{{$student->telephone}}</td>
    <td>{!! Form::open(['action' => ['StudentsController@destroy', $student->id], 'method' => 'delete']) !!}
		{!! Form::submit('Cancella', array('class' => 'btn btn-danger')) !!}
		{!! Form::close() !!}</td>
    <td><a href="{{action('StudentsController@edit', [$student->id])}}" button type="button" class="btn btn-default btn-lg">  
	<span class="glyphicon glyphicon-star" aria-hidden="true"></span> MODIFICA </a> </td>
    
  </tr>
  

	
		
	@endforeach
	</table>


@else
<p>nessun partecipante al corso</p>
@endif

@stop
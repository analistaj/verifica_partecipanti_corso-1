@extends('app')

@section('title')
Partecipanti Corso Programmatore
@stop

@section('content')
<h1>Studenti</h1>
@if (count($students))
<ul>
	@foreach ($students as $student)
		<div>
			<h2	><a href="{{action('StudentsController@show', [$student->id])}}">{{$student->name}}</a></h2>
			<ul>
				<li>{{$student->surname}}</li>
				<li>{{$student->email}}</li>
				<li>{{$student->telephone}}</li>
				<li>{{$student->id}}</li>
				
			</ul>
		</div>
	@endforeach
</ul>


@else
<p>nessun partecipante al corso</p>
@endif

@stop
@extends('app')

@section('title')
Edit user
@stop

@section('content')
<h1>Edit user </h1>
<hr />
{!! Form::model($article, ['method' => 'PATCH', 'action' => ['UsersController@update', $article->id]]) !!}
	@include('users.form', ['submitButtonText' => 'Update', 'create' => false])
{!! Form::close() !!}

@include('errors.list')

@stop
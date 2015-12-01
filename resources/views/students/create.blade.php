@extends('app')

@section('title')
New Article
@stop

@section('content')
<h1>new article</h1>
<hr />
{!! Form::model($Article = new \App\Article, array('action' => 'Articles_Controller@index')) !!}
	@include('article.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop
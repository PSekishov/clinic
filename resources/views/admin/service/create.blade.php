@extends('adminlte::page')

@section('title','Create Service')

@section('content_header')
	<h1>Create service</h1>
@stop

@section('content')
    {!! Form::model($service,['url'=>'/admin/service']) !!}
		@include('admin.service.form')
    {!! Form::close() !!}
@stop


@section('js')

<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>


<script>
  $('select').select2();
</script>


@stop
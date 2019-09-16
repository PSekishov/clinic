@extends('adminlte::page')

@section('title','Edit contact clinic')

@section('content_header')
	<h1>Edit contact clinic</h1>
@stop

@section('content')
    {!! Form::model($contact,['url'=>'/admin/contact/'.$contact->id,'method'=>'PUT']) !!}
		@include('admin.contact.form')
    {!! Form::close() !!}
@stop


@section('js')

<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>


<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  }; 

  CKEDITOR.replace( 'description',options );
</script>

<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script type="text/javascript">
	$('#lfm').filemanager('image');
</script>


@stop



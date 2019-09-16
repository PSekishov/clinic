@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
      <div class="col-12">

      <h1>Form Appointment</h1>

{!! Form::model($appointment,['url'=>'/appointment']) !!}
	@include('appointment.form')
{!! Form::close() !!}
<br>


</div>
</div>
</div>



@endsection
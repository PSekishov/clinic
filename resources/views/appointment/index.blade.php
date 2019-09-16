@extends('layouts.app')

@section('content')

<div class="container bilet">
	<div class="row">
		<div class="col-sm-12">

			<div class="text ">
				@foreach($appointments as $appointment)
				@if($loop->last)
				<h2> 
					Уважаемый(ая) <b>{{$appointment->patient}}</b>!<br>
                    Ваша встреча с врачём состоится {{$appointment->day}}  в {{$appointment->hour}} часов <br> <br>
                    Спосибо что избрали наших специалистов.
				</h2>
			
			@endif
			@endforeach
			</div>





		</div>
	</div>
</div>





@endsection
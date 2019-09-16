@extends('layouts.app')

@section('content')
<h1 class="text-center">{{$profession->prof}}</h1>


<div class="col-sm-10 col-md-12">
@foreach($doctors as $doctor)	
  @foreach($doctor->services as $service)
    <div class="columns">
      <ul class="price">
            <li class="header" style="background-color:#4CAF50">{{$service->serv}}</li>
            <li class="grey">{{$service->priceServ}} грв.</li>

            @foreach($service->doctors->all() as $path)
              <li><img src="{{$path->imgPath or ''}}" title="{{$path->nameDoc}}" alt="photo" width="180" height="180"></li> 
              <li>{{$path->surnameDoc or ''}} {{$path->nameDoc or ''}}</li>
            @endforeach
         
        <li class="grey"><a href="{{url('/appointment/create')}}" class="button">Записатся к специалисту</a></li>   
      </ul>
    </div> 
    @endforeach
    @endforeach   
</div>

<div class="clear"></div> 
@endsection
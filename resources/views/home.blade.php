@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h1 ><span class="jb">Clinic Dr Steve</span></h1>   
  <p>медицинский центр</p>
</div>


<ul class="nav nav-tabs">
  @foreach($professions as $profession)
  @if($loop->first)
  <li class="active"><a data-toggle="tab" href="#{{$profession->id}}">{{$profession->prof}}</a></li>
  @else
  <li><a data-toggle="tab" href="#{{$profession->id}}">{{$profession->prof}}</a></li>
  @endif
  @endforeach
</ul>


<div class="tab-content" style="background-color: #BFF0CB;">
@foreach($professions as $profession)
@if($loop->first)
  <div id="{{$profession->id}}" class="tab-pane fade in active">
    <h3 style="padding-top: 20px;" class="text-center">{{$profession->prof}}</h3>
          <div class="media">
  <div class="media-left media-top">
    <img src="{{$profession->imgPath}}" class="media-object img-rounded" style="width:200px; padding: 20px;">
  </div>
  <div class="media-body">
    <p>{!!$profession->description!!}</p>
  </div>
</div>
  </div>
@else
   <div id="{{$profession->id}}" class="tab-pane fade">
    <h3 style="padding-top: 20px;"class="text-center">{{$profession->prof}}</h3>
      <div class="media">
  <div class="media-left media-top">
    <img src="{{$profession->imgPath}}" class="media-object img-rounded" style="width:200px; padding: 20px;">
  </div>
  <div class="media-body text-left">
    <p>{!!$profession->description!!}</p>
  </div>
</div>
</div>
    
@endif  
@endforeach 
</div>

<div class="clear"></div>
@endsection

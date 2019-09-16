@extends('layouts.app')

@section('content')

    <div class="container-fluid about">
    	<div class="row">
    		<div class="col-sm-12">

    <h1 class="text-center">Наши сотрудники</h1>
    <br>
    
    
 
   @foreach($doctors as $doctor)
    <div class=" col-sm-3">
      <div class="thumbnail cart">
        <br>
          <img src="{{$doctor->imgPath}}" alt="..." class="img-rounded">
            <div class="caption ">
              <h3 class="text-center">{{$doctor->surnameDoc}}  {{$doctor->nameDoc}}</h3>
              <h4 style="color: green;opacity: 0.9;" class="text-center">{{$doctor->profession->prof}}</h4>
      </div>
    </div>
  </div>
   @endforeach
       
    		</div>
    	</div>
    </div>
    <div class="clear"></div> 



@endsection


@extends('layouts.app')

@section('content')


<div class="container-fluid service">
  <div class="row">
    <div class="col-sm-12">

  <h2 style="text-align:center;">Вы находитесь на странице услуг!</h2>

<div class="demo-1">

    <main class="main main--demo-1">
     
        
      
      <div class="content content--demo-1">
        <div class="hamburger js-hover">
          <div class="hamburger__line hamburger__line--01">
            <div class="hamburger__line-in hamburger__line-in--01"></div>
          </div>
          <div class="hamburger__line hamburger__line--02">
            <div class="hamburger__line-in hamburger__line-in--02"></div>
          </div>
          <div class="hamburger__line hamburger__line--03">
            <div class="hamburger__line-in hamburger__line-in--03"></div>
          </div>
          <div class="hamburger__line hamburger__line--cross01">
            <div class="hamburger__line-in hamburger__line-in--cross01"></div>
          </div>
          <div class="hamburger__line hamburger__line--cross02">
            <div class="hamburger__line-in hamburger__line-in--cross02"></div>
          </div>
        </div>

          {{-- ==================================== --}}


<div class="row"> 
  <div class="column">
    <img src="photos/item1.jpg" style="width:100%; height: 20%;">
    <img src="photos/item2.jpg" style="width:100%;height: 25%;">
    <img src="photos/slide-four.jpg" style="width:100%;height: 25%;">
    <img src="photos/slide-one.jpg" style="width:100%;height: 25%;">
  </div>
  <div class="column">
    <img src="photos/item3.jpg" style="width:100%"> 
    <img src="photos/item4.jpg" style="width:100%"> 
    <img src="photos/item5.jpg" style="width:100%">
    <img src="photos/item6.jpg" style="width:100%;height: 21%;">
  </div> 
  <div class="column">
  <img src="photos/item7.jpg" style="width:100%;height: 25%;">
    <img src="photos/item8.jpg" style="width:100%;height: 30%; ">
    <img src="photos/item9.jpg" style="width:100%;height: 25%;">
    <img src="photos/item10.jpg" style="width:100%;height: 15%;">
  </div>
</div>





          {{-- ====================================== --}}


        <div class="demo-title demo-title--demo-1">
         
        </div>

        <div class="global-menu">
          <div class="global-menu__wrap">

            @foreach($professions as $profession)
            <a class="global-menu__item global-menu__item--demo-1" href="/pageProfession/{{$profession->id}}">{{ $profession->prof}}</a>
            @endforeach

          </div>
        </div>
        <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
          <path class="shape-overlays__path"></path>
          <path class="shape-overlays__path"></path>
          <path class="shape-overlays__path"></path>
        </svg>
      </div>
    </main>
  
  </div>


    </div>
  </div>
</div>
    	
  <div class="clear"></div>    
@endsection






@extends('layouts.app')

@section('content')

<div class="container-fluid contact">
	<div class="row">
    
   
		<div class="col-sm-5">
			<h1>Контактная информация</h1>
			@foreach($contacts as $contact)

			<h3>Юридический адрес:</h3><br>
			<h2>{{$contact->country}}, {{$contact->region}}, {{$contact->city}}<br>
                {{$contact->street}} {{$contact->numHouse}}
			</h2>

			<h3>Email:</h3>
			<h2>{{$contact->email}}</h2>

            <h3>Номер телефона:</h3>
			<h2>{{$contact->numPhone}}</h2>
            @endforeach
            
            <h3>Режим работы:</h3>
			<h2>Ежедневно с 9:00 - 17:00</h2> 
            <h2>Суббота-Воскресенье <span style="color: red;">выходной</span></h2> 
           
			<h3>Мы в социальных сетях:</h3>
			<div class="net">
				<a href="#"><i class="fab fa-whatsapp"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-facebook-square"></i></a>
				<a href="#"><i class="fab fa-viber"></i></a>
			</div>

		</div>
         
		<div class="col-sm-7" style="margin-top:5%;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10921.448774009279!2d35.362717221537174!3d46.81686835292808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c2afc95ecb602b%3A0x6e761330a7dc58e8!2zOTRCLCDQodC40LzRhNC10YDQvtC_0L7Qu9GM0YHQutCw0Y8g0YPQuy4sIDk00JEsINCc0LXQu9C40YLQvtC_0L7Qu9GMLCDQl9Cw0L_QvtGA0L7QttGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA3MjMwMA!5e0!3m2!1sru!2sua!4v1553520129128" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>	




@endsection
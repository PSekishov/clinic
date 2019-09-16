@include('layouts.error')


<div class="form-group">
	{!! Form::label('name','Name clinic') !!}
	{!! Form::text('name',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::label('email','Email clinic') !!}
	{!! Form::email('email',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::label('country','Country clinic') !!}
	{!! Form::text('country',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::label('region','Region clinic') !!}
	{!! Form::text('region',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::label('city','City clinic') !!}
	{!! Form::text('city',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::label('street','Street clinic') !!}
	{!! Form::text('street',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::label('numPhone','Number phone clinic') !!}
	{!! Form::text('numPhone',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::label('numHouse','Number house clinic') !!}
	{!! Form::text('numHouse',null,['class'=>'form-control']) !!}
</div>



<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
   <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{$contact->imgPath or ''}}">
 </div>

 <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$contact->imgPath or ''}}"> 
 <br>
 <br>

 {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
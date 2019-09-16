@include('layouts.error')


 <div class="form-group">
	{!! Form::label('serv','Service clinic') !!}
	{!! Form::text('serv',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('priceServ','Price service') !!}
	{!! Form::text('priceServ',null,['class'=>'form-control']) !!}
</div>



 <div class="form-group">
	{!! Form::label('doctor_id','Doctor') !!}
	{!! Form::select('doctor_id',$doctor_id,null,['class'=>'form-control']) !!}
</div>



<div class="form-group">
	{!! Form::label('description','Service description') !!}
	{!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div> 


 <div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
   <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{$service->imgPath or ''}}">
 </div>

 <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$service->imgPath or ''}}"> 
 <br>
 <br>

 {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}

    <div class="formApp" style="width: 100%;height: 100vh;">
    			<div class="form-group">
	              {!! Form::label('day','На какой день')!!}<br>
	              {!! Form::text('day',null,['class'=>'Form-control']) !!}
                </div>

                <div class="form-group">
	              {!! Form::label('patient','Ваше имя и фамилия')!!}<br>
	              {!! Form::text('patient',null,['class'=>'Form-control']) !!}
                </div>
           
    			<div class="form-group">
    			
	              {!! Form::label('doctor_id','Доктор') !!}
	              {!! Form::select('doctor_id',$doctor_id,null,['class'=>'form-control']) !!}
	              
                </div>
    	
    			<div class="form-group">
	                {!! Form::label('hour',' 9:00')!!}
	                {!! Form::radio('hour',' 9:00',true) !!}<br>
	                {!! Form::label('hour','10:00')!!}
	                {!! Form::radio('hour','10.00') !!}<br>
	                {!! Form::label('hour','11:00')!!}
	                {!! Form::radio('hour','11.00') !!}<br>
	                {!! Form::label('hour','12:00')!!}
	                {!! Form::radio('hour','12.00') !!}<br>
	                {!! Form::label('hour','13:00')!!}
	                {!! Form::radio('hour','13.00') !!}<br>
	                {!! Form::label('hour','14:00')!!}
	                {!! Form::radio('hour','14.00') !!}<br>
	                {!! Form::label('hour','15:00')!!}
	                {!! Form::radio('hour','15.00') !!}<br>
	                {!! Form::label('hour','16:00')!!}
	                {!! Form::radio('hour','16.00') !!}<br>	
                </div>



{!! Form::submit('Save',['class'=>'btn btn-primary']) !!}

</div>

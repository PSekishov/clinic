@extends('adminlte::page')

@section('content')

  <h1>All services clinic</h1>

 <table class="table" id="myTable">
	<thead>
			<tr>
				<th>ID</th>
                <th>Service</th>
                <th>Price service</th>
                <th>ImageDoc</th>
				<th>Description service</th>
				<th>Edit</th>
				<th>Delete</th> 
			</tr>
		</thead>	
    <tbody>
    	
    	@foreach($services as $service)
       
    	<tr class="text-center">
    		<td>{{ $loop->iteration}}</td>
    		<td>{{ $service->serv }}</td>
            <td>{{ $service->priceServ }} грв.</td>

    		<td>
                @foreach($service->doctors->pluck('imgPath') as $path)
                <img src="{{$path or ''}}" title="{{$service->serv}}" alt="Photo">
                @endforeach
            </td>
                
    		<td>{!! $service->description !!}</td> 

    		<td><a href="{{url('/admin/service/'.$service->id.'/edit')}}" title="Редактирование файла"><i class="far fa-edit"></i></a></td>
    		<td><a href="#" data-id="{{ $service->id }}" class="delete" title="Удаление файла"><i class="far fa-trash-alt"></i></a></td> 
    	</tr>
    
    	@endforeach
    	
    </tbody> 

</table>

@stop 



@section('js')
<script type="text/javascript">

	$(document).ready(function(){

    $('#myTable').DataTable();

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
     
     	$('#myTable').on('click','.delete',function(e){
          e.preventDefault();
          let id = $(this).attr('data-id');
          let elem = $(this);

          $.ajax({
     		   url:'/admin/service/'+ id,
     		   type: 'delete',
     		   success: function(){
     		   	 elem.parents('tr').remove()
     		   }

        	});
     	}) 
     	
}); // end jQuery
</script>
@stop



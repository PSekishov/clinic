@extends('adminlte::page')

@section('content')

  <h1>Professions clinic</h1>

<table class="table" id="myTable">
	<thead>
			<tr>
				<th>ID</th>
				<th>Profession</th>
				<th>Image</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>	
    <tbody>
    	@foreach($professions as $profession)
    	<tr>
    		<td>{{ $loop->iteration}}</td>
    		<td>{{ $profession->prof }}</td>
    		<td><img src="{{$profession->imgPath}}" title="{{$profession->prof}}" alt="Photo"></td>
    		<td>{!! $profession->description !!}</td>
    		<td><a href="{{url('/admin/profession/'.$profession->id.'/edit')}}" title="Редактирование файла"><i class="far fa-edit"></i></a></td>
    		<td><a href="#" data-id="{{ $profession->id }}" class="delete" title="Удаление файла"><i class="far fa-trash-alt"></i></a></td>
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
     		   url:'/admin/profession/'+ id,
     		   type: 'delete',
     		   success: function(){
     		   	 elem.parents('tr').remove()
     		   }

        	});
     	}) 
     	
}); // end jQuery
</script>
@stop
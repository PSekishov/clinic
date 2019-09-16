@extends('adminlte::page')

@section('content')

  <h1>Doctors clinic</h1>

<table class="table" id="myTable">
	<thead>
			<tr>
				<th>ID</th>
                <th>Name and Surname</th>
                <th>Image</th>
				<th>Profession</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>	
    <tbody>
    	@foreach($doctors as $doctor)
    	<tr style="text-align: center;">
    		<td>{{ $loop->iteration}}</td>
    		<td>{{ $doctor->nameDoc }}  {{ $doctor->surnameDoc }}</td>
    		<td><img src="{{$doctor->imgPath}}" title="{{$doctor->profession->prof}}" alt="Photo"></td>
            <td>{!! $doctor->profession->prof !!}</td>
    		<td>{!! $doctor->description !!}</td>
    		<td><a href="{{url('/admin/doctor/'.$doctor->id.'/edit')}}" title="Редактирование файла"><i class="far fa-edit"></i></a></td>
    		<td><a href="#" data-id="{{ $doctor->id }}" class="delete" title="Удаление файла"><i class="far fa-trash-alt"></i></a></td>
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
     		   url:'/admin/doctor/'+ id,
     		   type: 'delete',
     		   success: function(){
     		   	 elem.parents('tr').remove()
     		   }

        	});
     	}) 
     	
}); // end jQuery
</script>
@stop
@extends('adminlte::page')

@section('content')

  <h1>Contacts Clinic</h1>

<table class="table" id="myTable">
	<thead>
			<tr>
				<th>ID</th>
				<th>Logotip clinic</th>
				<th>Name clinic</th>
                <th>Email clinic</th>
				<th>Phone clinic</th>
				<th>Country clinic</th>
				<th>Region clinic</th>
				<th>City clinic</th>
				<th>Street</th>
				<th>Num house</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>	
    <tbody>
    	@foreach($contacts as $contact)
    	<tr>
    		<td>{{ $loop->iteration}}</td>  		
    		<td ><img src="{{$contact->imgPath}}" style="width: 50%" title="{{$contact->name}}" alt="Photo"></td>
    		<td >{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
    		<td >{{ $contact->numPhone }}</td>
    		<td >{{ $contact->country }}</td>
    		<td >{{ $contact->region }}</td>
    		<td >{{ $contact->city }}</td>
    		<td>{{ $contact->street }}</td>
    		<td >{{ $contact->numHouse }}</td>
    		<td ><a href="{{url('/admin/contact/'.$contact->id.'/edit')}}" title="Редактирование файла"><i class="far fa-edit"></i></a></td>
    		<td class="text-center"><a href="#" data-id="{{ $contact->id }}" class="delete" title="Удаление файла"><i class="far fa-trash-alt"></i></a></td>
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
     		   url:'/admin/contact/'+ id,
     		   type: 'DELETE',
     		   success: function(){
     		   	 elem.parents('tr').remove()
     		   }

        	});
     	}) 
     	
}); // end jQuery
</script>
@stop
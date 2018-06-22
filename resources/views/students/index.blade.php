@extends('layouts.dashboard')


@section('css')

<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">

@endsection


@section('title')

<h3 class="text-primary">Students</h3>

@endsection



@section('content')

<div class="col-12">
	
	<div class="card">
		<div class="card-body"> 
			<div class="form-group">
				<a href="{{route('student.create')}}" class="btn btn-success">Add</a>
			</div>

			

			

		
			<table class="table table-bordered" id="students-table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Student Code</th>
						<th>Address</th>
						<th>Email</th>
						<th>Contact Number</th>
						
						<th></th>
						<th></th>
					</tr>
				</thead>
			</table>  
		</div>
	</div>
</div>

@endsection


@section('script')
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script>
	$(function() {
		$('#students-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: '{!! route('student.data') !!}',
			columns: [
			{ data: 'id', name: 'id' },
			{ data: 'name', name: 'name' },
			{ data: 'student_code', name: 'student_code' },
			{ data: 'address', name: 'address' },
			{ data: 'email', name: 'email' },
			{ data: 'contact_number', name: 'contact_number' },

			{ data: 'edit', name: 'edit' },
			{ data: 'delete', name: 'delete'}
			
			]
		});
	});
</script>
@endsection



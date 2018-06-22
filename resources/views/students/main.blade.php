@extends('layouts.dashboard')


@section('css')

<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/select2-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/pretty-checkbox.min.css')}}">


@endsection


@section('title')

<h3 class="text-primary">Students</h3>

@endsection



@section('content')

<div class="col-12">
	
	<div class="card">
		<div class="card-body"> 
			
	</div>
</div>
<div class="card">
	<div class="card-body">
		<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Student Code</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
     
    </tr>
  </thead>
  <tbody>
  	@foreach($students as $student)
    <tr>
      <th scope="row">{{$student->student_code}}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->email}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
	</div>
</div>
</div>

@endsection

@section('script')

<script src="{{asset('js/select2.min.js')}}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@2.5.16/dist/vue.js"></script>
<script src="/js/ajax-custom.js"></script>
<script>



$("document").ready(function(){
				$(".myclass").select2();
			});
	

	

	function goBack(){
		window.history.back();
	}



	

</script>

@endsection





















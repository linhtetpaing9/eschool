@extends('layouts.dashboard')


@section('css')

<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/select2-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/pretty-checkbox.min.css')}}">


@endsection

@section('title')

<h3 class="text-primary">Student Create Form</h3>

@endsection



@section('content')


<div class="col-12">
	<div id="root">
		<div class="card">
			<div class="card-body"> 
				<div class="col-lg-10 mx-auto">

					<form action="{{route('student.store')}}" method="POST" class="form-horizontal form-bordered">
						{{csrf_field()}}
						<div class="form-body">
							<div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
								<div class="col-md-3">
									<label class="control-label text-right">Name</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="name" value="{{ old('name') }}"  autofocus>

									@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
									@endif
								</div>
							</div>
							<div class="form-group row {{ $errors->has('address') ? ' has-error' : '' }}">
								<div class="col-md-3">
									<label class="control-label text-right">Address</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="address" value="{{ old('address') }}"  autofocus>

									@if ($errors->has('address'))
									<span class="help-block">
										<strong>{{ $errors->first('address') }}</strong>
									</span>
									@endif
								</div>
							</div>
							<div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
								<div class="col-md-3">
									<label class="control-label text-right">Email</label>
								</div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="email" value="{{ old('email') }}"  autofocus>

									@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							

							<div class="form-group row">
								<div class="col-md-3">
									<label class="control-label text-right">Grade</label>
								</div>
								<div class="col-md-9">

									
									<select class="form-control myclass" name="grade_id" single="single" >
										<option value="">--Select Grade--</option>
										@foreach($grade as $key=>$value)
										<option value="{{$key}}">{{$value}}</option>
										@endforeach
										

									</select>
									


									
								</div>
							</div>

							

							<div class="form-group row">
								<div class="col-md-3">
									<label class="control-label text-right">Section</label>
								</div>
								<div class="col-md-9">
									<select class="form-control myclass" id="section_id" name="section_id" single="single">

										<option>--Select Section--</option>
										
										


									</select>

									
								</div>
							</div>
							
							


							<div class="form-group row {{ $errors->has('contact_number') ? ' has-error' : '' }}">
								<div class="col-md-3">
									<label class="control-label text-right">Contact Number</label>
								</div>
								<div class="col-md-9">

									<input type="tel" class="form-control" id="telNo" name="contact_number" value="{{ old('contact_number') }}"  placeholder="09250359280" size="20" minlength="9" maxlength="11" autofocus>

									@if ($errors->has('contact_number'))
									<span class="help-block">
										<strong>{{ $errors->first('contact_number') }}</strong>
									</span>
									@endif
								</div>
							</div>













						</div>
						<div class="form-actions">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="offset-sm-3 col-md-9">
											<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
											<button type="button" onclick="goBack()" class="btn btn-inverse">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>

				</div>

			</div>
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


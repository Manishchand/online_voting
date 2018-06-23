@extends('master.layout')

@section('content')
<!--define logo  -->
<div class="line clearfix">
	<!-- contain line -->
	<h2>Welcome to Online Polling</h2>
</div>
<div class="registration">
	<!-- registration  -->
	<form>
		<div class="form-group row">
			<div class="col-md-4 text-center">
				<h5>Here to vote?</h5>
				<a href="user_guide.html">User Guide</a>
			</div>

			<div class="col-md-3">
				<input type="text" class="form-control" placeholder="registration code" 
				aria-label="registration" aria-describedby="basic-addon1">

				<!-- <input type="text"  id="regcode" placeholder="registration code"/> -->
			</div>
			<div class="col-md-2 text-left">
				<a href="{{route('ballotpaper')}}">
					<button type="button" class="btn btn-primary">Go to Ballot</button>
				</a>
			</div>
			
			<div class="col-md-3 pull-right">
				<a href="{{route('voter_login')}}">Voter Login</a>
			
			<div class="col-md-6 pull-right" style="margin-right:40px;">
				<a href="{{route('voter_register')}}">Voter Registration</a>
			</div></div>



		</div>
	</form>
</div>
<!-- </div> -->
<div class="container">
	<br>
	<div class="row ">
		<div class="col-md-12 text-center">
			<a href="{{url('/result')}}">
				<button type="button" class="btn btn-success btn-lg">Results</button>

			</a>
		</div>
	</div>
	<br>
	<div class="row">

		<div class="col-md-6 text-center">
			<h4>Ready to run election?</h4>
		</div>
	</div>
	<div class="row">

		<div class="col-md-8 text-right">
			<a href="{{route('adminsignup')}}">
			<button type="button" class="btn btn-primary btn-lg">Sign Up to create election</button></a>
		</div>
	</div>
	<br>

	<br>
	<div class="row">

		<div class="col-md-6 text-center">
			<h4>Already have an account?</h4>
		</div>

	</div>
	<div class="form">

		<form action="{{route('signinadmin')}}" method="post" role="form">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label">UserName</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="username" placeholder="username" name="username">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 text-center">

						<button type="submit" class="btn btn-primary btn-lg">Login</button>

				</div>
			</div>
		</form>
	</div>

	<br>
	<br>
</div>
<br>


@endsection

@section('footer')
<div class="col-md-6 text-center hover">
			<a href="about.html">About</a>
		</div>
		<div class="col-md-6 text-center hover">
			<a href="{{url('/contactus')}}">Contact Us</a>
		</div>
@endsection
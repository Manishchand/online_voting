@extends('master.layout')
@section('content')
	<div class="top">
  		<!--define logo  -->
  		<div class="row">
  			<div class="col-md-6 text-center">
  			<a href="home_page.html">
  				<img src="{{'images/last.png'}}" id="logo"></a>
  			</div>
  				<div class="col-md-6 text-center user">
				<h4>Successful Voting</h4>
				</div>
  		</div>
	</div>
			<div class="container">
				<div class="text">
				<h3><center>Thank you for voting</center></h3>
				<h5><center>your vote has been recorded.</center></h5>
				</div>
			</div>
			<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

@section('footer')

			<div class="col-md-4 text-center hover">
				<a href="{{url('/about')}}">About</a>
			</div>
			<div class="col-md-4 text-center hover">
				<a href="{{url('/')}}">Home</a>
			</div>
			<div class="col-md-4 text-center hover">
				<a href="{{url('/contactus')}}">Contact Us</a>
			</div>
		@endsection

@endsection
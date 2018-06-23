@extends('master.layout')

<!-- <div class="container"> -->
  	
    @section('content')
	<div class="container">
		<h5>Bin name</h5>
		<p>Election created by ............ <br>
		Voting closes in 2018/07/15 at 5:00pm</p>
		<br>
		<h5>Post</h5>
		<div class="select">
			<input type="radio" name="candidate"> first candidate name<br>
			<input type="radio" name="candidate" > second candidate name<br>
			<input type="radio" name="candidate" > third candidate name<br>
		</div><br>
		<div class="submit">
				<a href="{{route('voter_success')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Click here to submit this ballot</a>

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
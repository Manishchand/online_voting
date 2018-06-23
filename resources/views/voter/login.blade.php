@extends('master.layout')
@section('content')
  	
	<div class="container">
  <br>
  <br>
	<form  id="message">

    <h2>Enter the username and password to get registration code</h2>
    <br>
	<div class="form-group row">
    <!-- <i class="fa fa-circle fa" aria-hidden="true"> --><!-- </i> --><label for="username" class="col-sm-2 col-form-label">UserName</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="username" placeholder="enter your username">
    </div>
  </div>

   <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-default show_modal_form" href="{{ route('modal') }}">Sign In</button>
    </div>
  </div>
  </form>	


	</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script src="{{ asset('vendor/leantony/modal/modal.min.js') }}"></script>
    <!-- initialize the modal js plugin -->
    <script>
        leantony.modal({});
    </script>

    <!-- Add the modal container to your layout. This is where the html for the modal form will be injected by the javascript ajax call. Put it ideally just before the footer -->

    @include('modal::container')
    @endsection

    @section('footer')
	<div class="footer">
<div class="row">

<div class="col-md-6 text-center hover">
	<a href="{{url('/')}}">Home</a>
</div>
<div class="col-md-6 text-center hover">
	<a href="contact_us.html">Contact Us</a>
</div>
	
</div>
</div>
@endsection
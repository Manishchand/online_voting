@extends('master.layout')


		@section('content')
	<div class="container" >
	<div class="alert alert-dark" role="alert" style="background-color:lightgrey">
			<div class="row">
	        <br/>
	        <p>NOTE: this message will be sent to Online polling, not to the person who set up your
	                election. If you have a question or comment regarding your specific election, please
	          	contact the person who sent you the registration notice.  Thanks</span>
	        </p>
		    </div>

	    </div>
	    <br>

	    <form>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Your Email Address </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="test@mailbox.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="subject" class="col-sm-2 col-form-label">Subject</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="subject" placeholder="subject">
    </div>
  </div>
   <div class="form-group row">
    <label for="message" class="col-sm-2 col-form-label">Message</label>
    <div class="col-sm-10">
		 <textarea name='message' cols=40 rows=5></textarea>
    </div>
  </div>
  <div class="row">
  <div class="col-md-6 text-center">
  <button type="button" class="btn btn-light  btn-outline-dark">Submit</button>
  </div>
  </div>
</form>

	</div>	
	<br>
    @endsection

	@section('footer')

<div class="col-md-6 text-center hover">
	<a href="{{url('/')}}">Home</a>
</div>
<div class="col-md-6 text-center hover">
	<a href="{{url('/about')}}">About Us</a>
</div>
	
@endsection
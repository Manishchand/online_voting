@extends('master.layout')
@section('content')
<div class="container">
	<br/>
    <br/>
    <b>Step 1:</b> You fill out the Sign-Up Form.<br>
    <b>Step 2:</b> Online Polling sends you an activation email.<br>
    <b>Step 3:</b> You follow the instructions in the email to activate your account.<br/>
    <br/>

    <div class="alert alert-dark" role="alert" style="background-color:lightgrey;">
			<div class="row">
	        <br/>
	        <p>NOTE: Fields with black dots are required.  Thanks</span>
	        </p>
		    </div>

	</div></div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('post_signup')}}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="userid" class="col-md-4 control-label">Userid</label>
                            <div class="col-md-6">
                                <input id="userid" type="text" class="form-control" name="userid" value="" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" value="" required>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>
                                An activation code will be sent to this mail.
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Phone</label>
                            <div class="col-md-6">
                                <input id="integer" type="integer" class="form-control" name="phone" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="organization" class="col-md-4 control-label">Organization</label>
                            <div class="col-md-6">
                                <input id="organization" type="string" class="form-control" name="organization" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <input id="address" type="string" class="form-control" name="address" required>
                            </div>
                        </div>


                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Sign up
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('footer')
<div class="col-md-6 text-center hover">
			<a href="about.html">About</a>
		</div>
		<div class="col-md-6 text-center hover">
			<a href="contact_us.html">Contact Us</a>
		</div>

        @endsection
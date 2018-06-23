@extends('master.layout')


                <div class=" col-md-2 pull-right user">
				<h4>My account</h4>
				</div>
  			
  			<div class="col-md-2 pull-right admin_acc">
  				<a href="adminaccount.html">Contact Us</a>
  			</div>
  			  		
@section('content')

<div class="container">
  			
              <form>
                  <div class="row">
                      <div class="col text-center">
                  <div class="logout">
                    <a href="{{url('/')}}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">LOG OUT</a>
    
            </div>
        </div>
    </div>
    <br>
            <div class="form-group row">
                <!-- <i class="fa fa-circle fa" aria-hidden="true"> --><!-- </i> --><label for="username" class="col-sm-3 col-form-label">Username:</label>
                    <div class="col-sm-6">
                          <input type="text" class="form-control" value="admin username" id="username">
        </div>
      </div>
      
      <div class="form-group row">
                <!-- <i class="fa fa-circle fa" aria-hidden="true"> --><!-- </i> --><label for="Password" class="col-sm-3 col-form-label">Password:</label>
                    <div class="col-sm-6">
                          <input type="text" class="form-control" value="Password" id="Password">
        </div>
      </div>
      <div class="form-group row">
                <!-- <i class="fa fa-circle fa" aria-hidden="true"> --><!-- </i> --><label for="Name" class="col-sm-3 col-form-label">Name:</label>
                    <div class="col-sm-6">
                          <input type="text" class="form-control" value="Name" id="Name">
        </div>
      </div>
      <div class="form-group row">
                <!-- <i class="fa fa-circle fa" aria-hidden="true"> --><!-- </i> --><label for="Email Address" class="col-sm-3 col-form-label">Email Address:</label>
                    <div class="col-sm-6">
                          <input type="text" class="form-control" value="Email Address" id="Email">
        </div>
      </div>
      <div class="form-group row">
                <!-- <i class="fa fa-circle fa" aria-hidden="true"> --><!-- </i> --><label for="Org" class="col-sm-3 col-form-label">Organization:</label>
                    <div class="col-sm-6">
                          <input type="text" class="form-control" value="Organization" id="Org">
        </div>
      </div>
      <div class="form-group row">
                <!-- <i class="fa fa-circle fa" aria-hidden="true"> --><!-- </i> --><label for="Phone Number" class="col-sm-3 col-form-label">Phone Number:</label>
                    <div class="col-sm-6">
                          <input type="text" class="form-control" value="Phone Number" id="Phone Number">
        </div>
      </div>
      <div class="form-group row">
                <!-- <i class="fa fa-circle fa" aria-hidden="true"> --><!-- </i> --><label for="Address" class="col-sm-3 col-form-label">Address:</label>
                    <div class="col-sm-6">
                          <input type="text" class="form-control" value="Address" id="Address">
                </div>
          </div><br>
              <div class="submit">
                    <a href=".html" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Update</a>
    
            </div>
              </form>	
          </div>
@endsection
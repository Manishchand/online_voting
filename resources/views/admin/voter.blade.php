@extends('master.layout')



                <div class=" col-md-2 pull-right user">
				<h4>Admin Page</h4>
				</div>
  			
  			
  			<div class="col-md-2 pull-right admin_acc">
  				<a href="{{route('admin_account')}}">My Account</a>
  			</div>
        <div  class="col-md-1 logout pull-right">
        <a href="{{route('logout')}}">logout<span class="glyphicon glyphicon-log-out"></span></a>
        </div>
       

@section('content')


<div class="row" style="margin-left:100px;">
<div clalss="col-lg-8">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="{{route('admin_after_signin') }}">Properties</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('createballot')}}">Ballot</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link " href="{{route('edit_voter')}}">Voters</a>
  </li>
  
</ul>
 </div></div>


<div class="container">
    <h4>List of Registered Voters</h4>
   
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Voters_name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone_no</th>
      <th scope="col">UserId</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($voters as $voter)
    <tr>
      <th scope="row">{{$voter->id}}</th>
      <td>{{$voter->title}}</td>
      <td>{{$voter->voter_name}}</td>
      <td>{{$voter->email}}</td>
      <td>{{$voter->phone_no}}</td>
      <td>{{$voter->userid}}</td>
      <td>{{$voter->password}}</td>
     
      <td>
        <a href="{{route('approving_voter',[$voter->id,$voter->email])}}">
          <button class="btn btn-success">
            <span class="glyphicon glyphicon-ok"></span>
          </button>
        </a>

        <a href="{{route('delete_selfReg_voter',['id'=>$voter->id])}}">
          <button class="btn btn-danger">
            <span class="glyphicon glyphicon-trash"></span>
          </button>
        </a>
      </td>
    </tr>@endforeach 
  </tbody>
</table>
	<br>
  <h4>List of Approved voters</h4>

   
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th> 
      <th scope="col">Voter_name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone_no</th>
      <th scope="col">Userid</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach($approvedvoter as $voter)
    <tr>
    <td>{{$voter->id}}</td>
      <td>{{$voter->title}}</td>
      <td>{{$voter->voter_name}}</td>
      <td>{{$voter->email}}</td>
      <td>{{$voter->phone_no}}</td>
      <td>{{$voter->userid}}</td>
      <td>{{$voter->password}}</td>
      
      <td>
        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>
  @endforeach

  </tbody>
</table>
	
  <div class="row">
    <div class="col text-center">
      
      <button type="submit" class="btn btn-success show_modal_form" href="{{route('add_voters')}}">Add Voter</button>
  
  </div>
</div>

<br>
</div>

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


<script src="{{ asset('vendor/leantony/modal/modal.min.js') }}"></script>
    <!-- initialize the modal js plugin -->
    {{--<script>--}}
        {{--leantony.modal({});--}}
    {{--</script>--}}

    <!-- Add the modal container to your layout. This is where the html for the modal form will be injected by the javascript ajax call. Put it ideally just before the footer -->

    @include('modal::container')
    @endsection
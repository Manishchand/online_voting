@extends('master.layout')

                <div class=" col-md-2 pull-right user">
				<h4>Admin Page</h4>
				</div>
  			<div class="col-md-2 pull-right new_title">
  				<a href="{{route('new_election')}}"><button class="btn btn-primary">New Title</button></a>
  			</div>	
  			
  			<div class="col-md-1 pull-right admin_acc">
  				<a href="{{route('admin_account')}}">My Account</a>
     
  			</div>
  			
        <div  class="col-md-1 logout pull-right">
        <a href="{{route('logout')}}">logout<span class="glyphicon glyphicon-log-out"></span></a>
        </div>
       
  		
@section('content')


<div class="row" style="margin-left:100px;">
<div clalss="col-lg-8">
<ul class="nav nav-tabs">
  <li class="nav-item active">
    <a class="nav-link " href="{{route('admin_after_signin') }}">Properties</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('createballot')}}">Ballot</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('edit_voter')}}">Voters</a>
  </li>
  
</ul>
 </div></div>
 </div>

    <div class="container">
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">start date</th>
      <th scope="col">End date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>@foreach($jjpt as $jpt)
    <tr>
      <th scope="row">{{$jpt->id}}</th>
      <td>{{$jpt->title}}</td>
      <td>{{$jpt->start_date}}</td>
      <td>{{$jpt->end_date}}</td>
      <td>

          <a href="{{route('edit_title', ['id'=>$jpt->id])}}">
      	<button type="submit" class="btn btn-success show_modal_form"><span class="glyphicon glyphicon-pencil"></span>
		</button>
          </a>

          <a href="{{route('delete_title',['id'=>$jpt->id])}}">
      	<button class="btn btn-danger">
          <!-- <i class="fa fa-trash"></i> -->
          <span class="	glyphicon glyphicon-trash"></span>
        </button>
          </a>
      </td>
    </tr>
  </tbody>@endforeach
</table>
	</div>	





<script src="{{ asset('vendor/leantony/modal/modal.min.js') }}"></script>
    <!-- initialize the modal js plugin -->
    {{--<script>--}}
        {{--leantony.modal({});--}}
    {{--</script>--}}

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
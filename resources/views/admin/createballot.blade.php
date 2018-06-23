@extends('master.layout')

                <div class=" col-md-2 pull-right user">
				<h4>Admin Page</h4>
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
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin_after_signin') }}">Properties</a>
  </li>
  <li class="nav-item  active">
    <a class="nav-link" href="{{route('createballot')}}">Ballot</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('edit_voter')}}">Voters</a>
  </li>
  
</ul>
 </div></div>
 </div>

 <h4 style="margin-left:100px;">all define posts</h4>
     <div class="row"style="margin-left:100px;" >
                    <div class="col-sm-7">
                    <a class="btn btn-primary" role="button" href="{{'add_position'}}">
                       <span class="glyphicon glyphicon-plus"></span>
                    </a>
                    </div>
            </div>

<table class="table table-hover"style="margin-left:100px;" >
  <thead>
    <tr>
      <th scope="col">#</th>
        <th scope="col">Title</th>
      <th scope="col">Post</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($post as $post)
    <tr>

        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
      <td>{{$post->post}}</td>
      <td>
          <a href="{{route('edit_post', ['id'=>$post->id])}}">
              <button type="submit" class="btn btn-success show_modal_form"><span class="glyphicon glyphicon-pencil"></span>
              </button>
          </a>

          <a href="{{route('delete_post',['id'=>$post->id])}}">
      	<button class="btn btn-danger">
            <span class="glyphicon glyphicon-trash"></span>
        </button>
          </a>
      </td>
    </tr>
       @endforeach
  </tbody>
</table>
	<br>
  <h4 style="margin-left:100px;">all candidates</h4>

   <div class="row" style="margin-left:100px;">
                    <div class="col-sm-7">
                    <a class="btn btn-primary" role="button" href="{{'add_position'}}">
                         <span class="glyphicon glyphicon-plus"></span>
                    </a>
                    </div>
            </div>
    <table class="table table-hover" style="margin-left:100px;margin-right:100px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Post</th>
      <th scope="col">Candiate Name</th>
      <!-- <th scope="col">Bio</th> -->
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($candidate as $can)
    <tr>
        <th scope="row">{{$can->id}}</th>
      <td>{{$can->post}}</td>
      <td>{{$can->candidate_name}}</td>
      <!-- <td>description</td> -->
      <td>
          <a href="{{route('edit_candidate', ['id'=>$can->id])}}">
              <button type="submit" class="btn btn-success show_modal_form"><span class="glyphicon glyphicon-pencil"></span>
              </button>
          </a>

          <a href="{{route('delete_candidate',['id'=>$can->id])}}">
        <button class="btn btn-danger">
            <span class="glyphicon glyphicon-trash"></span>
        </button>
          </a>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
	

<br>
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
	<a href="{{url('/contactus')}}">Contact Us</a>
</div>
	
</div>
</div>
@endsection
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
<div class="container">
<div class="row" >
<div clalss="col-lg-8">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin_after_signin') }}">Properties</a>
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
	</div>
  <br>
	<div class="container">
          <div class="row">
            <div class="col text-center">
              <h3>Post</h3>
            </div>
          </div>      
          {!!Form::open(['action'=>'AdminController@add_post','method'=>'POST'])!!}

        {{Form::label('Title','Choose title')}}
        {{Form::text('title','',['placeholder'=>'Title','class'=>'form-control'])}}

        {{Form::label('newpost','New Post')}}
       {{Form::text('newpost','',['placeholder'=>'New Post','class'=>'form-control'])}}
    <div>
                  <small id="post" class="form-text text-muted">add new post</small>
                </div>


                

                  {{Form::submit('Save',['class'=>'btn btn-primary','name'=>'form1'])}}

                                
            
              <br>
              <div class="row">
                <div class="col text-center">
                  <h3>Candidate</h3>
                </div>
              </div>
             {!!form::open(['action'=>'AdminController@add_post','method'=>'post'])!!}
             {{form::label('choosePost','Choose post')}}
             {{form::text('choosePost','',['placeholder'=>'choosepost','class'=>'form-control'])}}
             <div>
             <small id="post" class="form-text text-muted">choose post</small>
                                </div>
             {{form::label('candidateName','Candidate Name')}}
             {{form::text('candidateName','',['placeholder'=>'Candidate name','class'=>'form-control'])}}
             <div>
             <small id="candidate" class="form-text text-muted">choose candidate</small>
              </div>
              {{form::submit('Save',['class'=>'btn btn-primary','name'=>'form2'])}}

             {!!form::close()!!}
              


      </div>   
      <br>

@endsection
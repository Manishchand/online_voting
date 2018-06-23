@extends('master.layout')
<div class=" col-md-2 pull-right user">
    <h4>New Title</h4>
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
  		<br>
  		<br>




<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Title</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('jpt')}}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="userid" class="col-md-4 control-label">Userid</label>
                            <div class="col-md-6">
                                <input id="userid" type="text" class="form-control" name="userid" value="" >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input id="title" type="title" class="form-control" name="title" value="" >
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Start Date</label>
                            <div class="col-md-6">
                                <input id="startdate" type="date" class="form-control" name="startdate" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">End Date</label>
                            <div class="col-md-6">
                                <input id="enddate" type="date" class="form-control" name="enddate" value="" >
                                
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                       

                       

                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>










			
  		
</div><br><br><br><br><br><br><br><br><br>
@endsection
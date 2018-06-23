@extends('master.layout')
<div class=" col-md-2 pull-right user">
    <h4>Edit Candidate</h4>
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


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Post</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{route('save_edit_candidate',['id'=>$update->id])}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$update->id}}" id="id">

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="post" class="col-md-4 control-label">Post</label>
                                <div class="col-md-6">
                                    <input id="post" type="text" class="form-control" name="post" value="{{$update->post}}" >
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong></strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="candidate" class="col-md-4 control-label">Candidate</label>
                                <div class="col-md-6">
                                    <input id="candidate" type="text" value="{{$update->candidate_name}}" class="form-control" name="candidate_name" >
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

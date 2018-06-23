
    <div class="modal-content"  style="color:black;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adding Voter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="{{route('admin_voters')}}">
                        {{ csrf_field() }}
                        <div class="row">
      <div class="col text-center">

<div class="row">
  <div class="col text-center">
  <h3>Title of the Election</h3>
                <select name="title">
                <!-- <option value="">choose for which you are going to vote</option> -->
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audiascasdcasdcsad</option>
              </select>
      </div>
    </div>
</div>
  </div><br><br><br>
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="userid" class="col-md-4 control-label">UserId</label>
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
                                <input id="name" type="string" class="form-control" name="name" required>
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
                                <input id="integer" type="phone" class="form-control" name="phone" required>
                                @if ($errors->has('integer'))
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" name="form2">
                                    Add Voter
                                </button>
                            </div>
                        </div>
                    </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  
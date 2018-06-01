<div class="modal fade" id="displayblock" tabindex="-1" role="dialog" style="padding-top: 100px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
                <form role="form" id="loginform" method="POST" action="{{ url ('/checkloginfn') }}">
                   
                    {{ csrf_field() }}
                    <p id="errormsg" style="display:none;color: red;">Please Check Username/Password</p>
                    <label>Email Address</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="email" name="email"  class="form-control" placeholder="Enter your email address">
                        </div>
                    </div>

                    <label>Password</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                        </div>
                    </div>

                        
                    <!-- <input type="checkbox" id="remember_me" class="filled-in">
                    <label for="remember_me">Remember Me</label> -->
                    <br>
                    <input type="button"  name="submit" value="Submit" id="loginsubmitbtn" class="btn btn-primary m-t-15 waves-effect">
                    <button type="button" class="btn btn-primary m-t-15 waves-effect"  onClick="CloseLoginPopup()">Cancel</button>
                    <a href="{{url('registation')}}"><input type="button"  name="Sign Up" value="Sign Up"  class="btn btn-primary m-t-15 waves-effect"></a>
                </form>
            </div>
        </div>
    </div>
</div>




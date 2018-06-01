<div class="modal fade" id="displayblock" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
                <form role="form" id="loginform" method="POST" action="{{ url ('/checkloginfn') }}">
                   
                    {{ csrf_field() }}
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

                        
                    <input type="checkbox" id="remember_me" class="filled-in">
                    <label for="remember_me">Remember Me</label>
                    <br>
                    <input type="button"  name="submit" value="submit" id="loginsubmitbtn" class="btn btn-primary m-t-15 waves-effect">
                  
                </form>
            </div>
        </div>
    </div>
</div>




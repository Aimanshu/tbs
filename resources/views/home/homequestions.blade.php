<div class="modal fade" id="conformbox" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="height: 10px;">
        <div class="modal-content">
            <div class="modal-body">
              
                <div class="row" style="display: block">
                    <div class="alert alert-secondary" role="alert" style="display:none;">
                    </div>
                    
                    <form  method="post" action="submit.php" id="PopUpSubmit"> 
                    <meta name="csrf-token" content="{{ csrf_token() }}">

                         <input type="hidden" id="locationdata" name="location" value="">
                        <div id="insertdata"></div>   
                        <center>
                            <button class="btn btn-primary" type="button" id="nextbutton">Next</button>
                            <button type="button" class="btn btn-primary m-t-15 waves-effect" for="1" id="submitbtn" name="submit" value="submit">Submit</button>
                            <button type="button" class="btn btn-primary m-t-15 waves-effect"  onClick="ClosePopup()">Cancel</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>


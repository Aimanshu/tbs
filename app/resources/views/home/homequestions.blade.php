<div class="modal fade" id="conformbox" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="height: 10px;">
        <div class="modal-content">
            <div class="modal-body">
              
                <div class="row" style="display: block">
                    <div class="alert alert-secondary" role="alert" style="display:none;">
                    </div>
                    
                    <form  method="post" action="submit.php" id="PopUpSubmit"> 
                     {{ csrf_field() }}
                         <input type="hidden" name="forquestion" value="1">
                        <div id="insertdata"> </div>   
                        <center>
                            <button class="btn btn-primary" type="button" id="nextbutton">Next</button>
                            <button type="button" class="btn btn-primary m-t-15 waves-effect" id="submitbtn" name="submit" value="submit">Submit</button>
                            <button type="button" class="btn btn-primary m-t-15 waves-effect"  onClick="ClosePopup()">Cancel</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>































<!-- <div class="modal fade" id="conformbox" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="height: 10px;">
        <div class="modal-content">
            <div class="modal-body">
              
              <div class="row" style="display: block">
                 <div class="alert alert-secondary" role="alert" style="display:none;">
                </div>
                 
                  <form id="PopUpSubmit" method="post" action="{{ url ('/answer_save') }}"> 
                  {{ csrf_field() }}
                  @verbatim
                    <h2>{{allquestion.title}}</h2>
                      <div ng-repeat="copyoption in copyoptions" ng-if="allquestion.answer_type == 1 || allquestion.answer_type == 2">
                         <label><input type="{{allquestion.answer_type == 2 ?  'checkbox' : 'radio'}}"  id="exampleRadios{{allquestion.id}}{{copyoption.value}}" name="exampleRadios{{allquestion.id}}" value="{{copyoption.value}}">{{copyoption.lable}}</label>
                      </div>

                        <div ng-if="allquestion.answer_type != 1 && allquestion.answer_type != 2 ">
                            <label><input type="text" name="input_ans" id="input_ans"></label>  
                        </div>

                </div>    
               
                <center>
                    <button class="btn btn-primary" type="button" id="nextbutton" ng-click="getNext(index)" ng-show="HideButtonNext">Next</button>
                    <button type="button" class="btn btn-primary m-t-15 waves-effect" id="submiting" name="submit" value="submit" ng-show="HideButtonSubmit" >Submit</button>
                    <button type="button" class="btn btn-primary m-t-15 waves-effect"  onClick="ClosePopup()">Cancel</button>
                </center>
                @endverbatim
            </form>
        </div>
     </div>
  </div>
</div>
 -->

@extends('super_admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid" ng-app="myApp" ng-controller="admincontroller" id="angularData">
        <div class="row clearfix" style="background-color: #fff;">
            <div class="header">
                <h2>Question Edit</h2>
            </div>

            @include('layouts.errors') 

            @if(Session::has('flash_message'))
            <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
            @endif

            <form role="form" method="POST" action="{{ route('superadmin_edit_questions',$questions->id) }}">
              {!! csrf_field() !!}
                <div class="col-sm-12">
                    <label>Answer type</label>  
                    <select class="form-control" id="questiontype" name="questiontype">
                        <option value="1" {{$questions->answer_type == 1 ? 'selected' : ''}}>Radio</option>
                        <option value="2" {{$questions->answer_type == 2 ? 'selected' : ''}}>CheckBox</option>
                        <option value="3" {{$questions->answer_type == 3 ? 'selected' : ''}}>Input</option>
                    </select>
                </div>
                <br><br><br><br>

                <div class="col-md-12">
                    <lable>Title:</lable>
                    <input type="text" name="title" id="title" value="{{$questions->title}}" class="form-control">
                </div>
                <br><br><br><br>

                <div class="col-md-12">
                    <lable>Description:</lable>
                    <input type="text" name="description" id="description" value="{{$questions->description}}" class="form-control">
                 </div>
                <br><br><br><br>
                
               
                    <div class="row" ng-show="!showDiv" ng-repeat="(index, option) in options track by $index" id="option_data">
                        <div class="form-group col-sm-10" id="options" > 
                            <label for="options">Key option @{{$index + 1}}</label> 
                            <div class="form-line">
                                <input type="text"  name="options[]" value="@{{option.lable}}" class="form-control" placeholder="Enter Option">
                            </div>
                        </div>

                        <div class="col-sm-2"  ng-if="$first">
                            <button type="button" ng-click="addmore()" class="btn btn-primary">Add More <i class="fas fa-plus"></i></button>
                        </div> 

                        <div class="col-sm-2"  ng-if="!$first"> 
                            <button type="button" ng-click="deletef($index)" class="btn btn-danger">Delete <i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div> 

                <center><button type="Submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button></center>
            </form>
        </div>
    </div>
</section>
@endsection


@section('script')
<script type="text/javascript"> 
    var app = angular.module('myApp',[]); 
    var qs_url = "{{route('api_single_questions', $questions->id)}}"
    var dev_showhide = {{$questions->answer_type}}
    app.controller("admincontroller", ['$scope', '$http', function($scope, $http) { 
        $scope.questiontype = dev_showhide
        $scope.showDiv = true
        $scope.change_show = function(index) {
            if (index == 1 || index == 2) {
                $scope.showDiv = false;
            }else{
                $scope.showDiv = true;
            }
            console.log($scope.showDiv)
            return 
        }

        $scope.change_show($scope.questiontype)
        $scope.options = ['']

        $http.get(qs_url).then(function(response) {
            $scope.options = JSON.parse(response.data.options)
            $scope.questiontype = response.data.answer_type
            $scope.change_show($scope.questiontype)
        });
        
        $scope.addmore = function(){ 
           $scope.options.push('')
        } 
        $scope.deletef = function(index){ 
           var indexpo = $scope.options.indexOf(index); 
           $scope.options.splice(indexpo, 1); 
        } 
    }]);
 </script>

<script>

    $( "#questiontype" ).change(function() {
    dev_showhide = this.value
    //    angular.element('#angularData').scope().change_show(dev_showhide);
        angular.element(document.getElementById('angularData')).scope().change_show(dev_showhide);
    });

</script>


@endsection




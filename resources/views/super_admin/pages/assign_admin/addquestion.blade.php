@extends('super_admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Create Question
                        </h2>
                    </div>
                    <div class="body">
                        @include('layouts.errors')
                            
                        @if(Session::has('flash_message'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                        @endif

                        <form role="form" method="POST" action="{{ url('questions',$category->id) }}">
                        {!! csrf_field() !!}

                            <div ng-app="myApp" ng-controller="admincontroller">
                                <label for="Username">Question Title</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" id="question_title" name="question_title" value="{{old('question_title')}}" class="form-control" placeholder="Enter Question Title">
                                        </div>
                                    </div>
                                
                                <label for="Username">Description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="description" name="description" value="{{old('description')}}" class="form-control" placeholder="Enter Description">
                                    </div>
                                </div>
                                
                                @verbatim   
                                <div class="form-group">   
                                    <label>Please Select Your Answer type</label>   
                                        <div class="col-sm-12">
                                            <select class="form-control" id="questiontype" ng-model="questiontype" name="questiontype" ng-change="demo()">
                                                <option value="">--Select One--</option>
                                                <option value="1">Radio</option>
                                                <option value="2">CheckBox</option>
                                                <option value="3">Input</option>
                                            </select>
                                        </div>
                                </div>         
                          
                                <div class="row" ng-show="!showDiv" ng-repeat="(index, option) in options track by $index">
                                    <div class="form-group col-sm-10" id="options" > 
                                        <label for="options">Key option {{$index + 1}}</label> 
                                        <div class="form-line">
                                         <input type="text"  name="options[]" value="{{old('options')}}" class="form-control" placeholder="Enter Option">
                                        </div>
                                    </div>

                                    <div class="col-sm-2"  ng-if="$first">
                                        <button type="button" ng-click="addmore()" class="btn btn-primary">Add More <i class="fas fa-plus"></i></button>
                                    </div> 

                                    <div class="col-sm-2"  ng-if="!$first"> 
                                        <button type="button" ng-click="deletef($index)" class="btn btn-danger">Delete <i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </div> 
                                @endverbatim

                                <br><br><button type="Submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                            </div><!--Ng Controller Div End-->     
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



@section('script')
<script type="text/javascript"> 
    var app = angular.module('myApp',[]); 
    app.controller("admincontroller", ['$scope', '$http', function($scope, $http) { 
        $scope.showDiv=true;
          
        $scope.demo = function(){

            if($scope.questiontype == 1 || $scope.questiontype == 2)
            {
                $scope.showDiv=false;
            }else{
                $scope.showDiv=true;
            }

        }    

        $scope.options = [''] 

        $scope.addmore = function(){ 
           $scope.options.push('')
        } 

        $scope.deletef = function(index){ 
           var indexpo = $scope.options.indexOf(index); 
           $scope.options.splice(indexpo, 1); 
        } 
          
    }]);
 </script>
 @endsection






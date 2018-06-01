<?php

namespace App\Http\Controllers;
//use App\Model\Request;
use Illuminate\Http\Request;
use Validator;
use App\Model\Category;
use App\Model\MainCategory;
use Session;
use Auth;
use App\User;

class LoginManuallyController extends Controller
{

    public function index()
    {
        return view('home.loginform');
    }

    public function checklogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email'              => 'required|email',
            'password'           => 'required|min:6',
        ]);


        if ($validator->fails()) {
           return response()->json(['success'=>'Added new records.'], 400);
        }
 

        $userdata = [
            'email'     =>  $request['email'],
            'password'  =>  $request['password']
        ];  

        if (Auth::attempt($userdata)) {
            $role=User::where('email',$request['email'])->value('role');
             return $role;
            return response('Success', 200);
        } else {        
            return response('faild', 400);
    
        }
    }

    //this is for Menu bar login
    public function checklogin2(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email'              => 'required|email',
            'password'           => 'required|min:6',
        ]);
        $userdata = [
            'email'     =>  $request['email'],
            'password'  =>  $request['password']
        ];  

        if (Auth::attempt($userdata)) {
            return response('Success', 200);
        } else {        
            return response('faild', 400);
        }
    }
 
}

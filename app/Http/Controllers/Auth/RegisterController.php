<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Model\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Model\User\UserProfile;
use Auth;
use Session;
use Eloquent;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        Auth::login();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //dd($data);
        if($data['chkPassPort'] =='1')
        {
            return Validator::make($data, [
                'name'              =>'required|string|max:255',
                'email'             =>'required|string|email|max:255|unique:users',
                'mobile'            =>'required|min:10',
                'chkPassPort'       =>'required|boolean',
                'business_name'     =>'required|string',
                'business_email'    =>'required|string',
                'business_cont_no'  =>'required|string|min:10',
                'website'           =>'required|string',
                'location'          =>'required|string',
                'full_address'      =>'required|string',
                'types_of_business' =>'required|string',
                'prod_or_serv_offe' =>'required|string',

                ]);
        }else{
            return Validator::make($data, [
                'name'              =>'required|string|max:255',
                'email'             =>'required|string|email|max:255|unique:users',
                'mobile'            =>'required|min:10',
                'location'          =>'required|string',
                'occupations'       =>'required|string',
            ]);
        }

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // $as=$as=mt_rand(100000, 999999);
        // return $as;
        if($data['chkPassPort'] =='1')
        {
            $user =  User::create([
                'name'       =>$data['name'],
                'email'      =>$data['email'],
                'mobile'     =>$data['mobile'],  
                'password'   =>112233, 
                // 'password'   =>bcrypt($data['password']),
                'role'       => 3,
            ]);

            Profile::create([
                'user_id'           =>$user->id,
                'business_name'     =>$data['business_name'],
                'business_email'    =>$data['business_email'],
                'business_cont_no'  =>$data['business_cont_no'],
                'website'           =>$data['website'],
                'location'          =>$data['location'],
                'full_address'      =>$data['full_address'],
                'types_of_business' =>$data['types_of_business'],
                'prod_or_serv_offe' =>$data['prod_or_serv_offe'],
            ]);
            Auth::logout();
           // return $user;
           Session::flash('flash_message','Successfully Saved.');    
        //    return back();

        }else{

             $user =  User::create([
                'name'       =>$data['name'],
                'email'      =>$data['email'],
                'mobile'     =>$data['mobile'],
                'role'       => 4,
            ]);
              
            UserProfile::create([
                'user_id'           =>$user->id,
                'location'          =>$data['location'],
                'occupation'        =>$data['occupations'],
            ]);
             return $user;
            Auth::logout();
           
           Session::flash('flash_message','Successfully Saved.');    
           Session::flush();
             // return back();
        }

    }
}

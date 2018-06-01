<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Category;
use App\Model\MainCategory;
use App\Model\Question;
use App\Enquiry;
use Session;
use Auth;
Use App\CategoryAdmin;
use App\User;
use App\Model\Profile;
use App\Model\User\UserProfile;
use Mail;
use DB;
use Carbon\Carbon;
use App\Model\Advertisement;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['home', 'enquriry_form', 'categories','tradersreg','GetQuestionForMenu','TradersRegistation','ForgetPasswordSend','SendResetLink','ResetForgetPassword']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('home');
    }

    public function home()
    {
        $maincategories   = MainCategory::with('categories')->get();
        $maincat          = MainCategory::take(6)->get();

        $advertiments = Advertisement::inRandomOrder()->first();
        return view('home.index', compact('maincategories','maincat','advertiments'));
    }

    public function enquriry_form($slug)
    {
        $category = Category::where('slug', $slug)->with('questions')->first();
        if (!$category) {
            return back();
        }
        return view('home/enquiry',compact('category'));
    }

    public function submit_enquriry_form($id, Request $request)
    {
        $userId     = Auth::id();
        $category   = Category::where('id', $id)->first();
        if (!$category) {
            return back();
        }
        $validatedData = $request->validate([
            'description'        => 'required|string|',
            'long_description'   => 'required|string|',
            'user_email'         => 'required|email',
            'mobile'             => 'required|max:10',
        ]);
      
        $enquiry =  Enquiry::create([
            'user_id'           =>$userId,
            'category_id'       => $id,
            'description'       => $request['description'],
            'long_description'  => $request['long_description'],
            'user_email'        => $request['user_email'],
            'mobile'            => $request['mobile'],   
            
        ]);

        Session::flash('flash_message','Successfully Saved.');    
        return back();
    }

    //This is For All Category show into Registation
    public function tradersreg()
    {
        $categories = Category::doesntHave('admincategory')->get();

        $main_categories = MainCategory::get();
        return view('tradersregistation',compact('categories','main_categories'));
    }


    public function categories() 
    {
       $categories = Category::get();
       $maincategories   = MainCategory::with('categories')->take(12)->get();     
       return [$maincategories,$categories];
    }

    public function answersave($id, Request $r)
    {
        $category = Category::where('id', $id)->with('questions')->first();

        if (!$category) {
            return back();
        }
       
        if($r->forquestion == 0) {
            $validatedData = $r->validate([
                'description'        => 'required|string|'
                //  'locations'          => 'required'
            ]);
            $jsondata = json_encode([
                'description'      => $r->description,
                'long_description' => $r->long_description
            ]);
        }else{
            $questions = [];
            foreach ($r->exampleRadios as $key => $answer) {
                $question = $category->questions->where('id', $key)->first();
                $questions [] = [
                    'question' => $question,
                    'answer'   => $answer
                ];
            }
            $jsondata = json_encode($questions);
        }
        $data = [
            'user_id'       => auth()->id(),
            'category_id'   => $category->id,
            'jsondata'      => $jsondata,
            'isQuestioned'  => $r->forquestion,
            'location'      => $r->location,  
        ];

       $enquiry =  Enquiry::create($data);

       Session::flash('flash_message','Successfully Saved.');    
       return back();
    }

    public function GetQuestionForMenu($id)
    {
        // $questions = Question::where('category_id', $id)->get();
        $category = Category::where('id', $id)->with('questions')->first();
        return $category;
    }

    public function TradersRegistation(Request $data)
    {
        //  dd($data->all());
        if($data['chkPassPort'] =='1')
        {
            $validator = Validator::make($data->all(), [
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
                'prod_or_serv_offe' =>'required',
                ]);
        }else{
            $validator = Validator::make($data->all(), [
                'name'              =>'required|string|max:255',
                'email'             =>'required|string|email|max:255|unique:users',
                'mobile'            =>'required|min:10',
                'location'          =>'required|string',
                'occupations'       =>'required|string',
            ]);
        }
       
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }
        // Hashing Password
        $newpassword =rand(10, 999999); 
        $hashpassword = Hash::make($newpassword);
        $subcat = json_encode($data['prod_or_serv_offe']);
        if($data['chkPassPort'] =='1')
        {
            $user =  User::create([
                'name'       =>$data['name'],
                'email'      =>$data['email'],
                'mobile'     =>$data['mobile'],  
                'password'   =>$hashpassword, 
                // 'password'   =>bcrypt($data['password']),
                'role'       => 3,
            ]);
            
            Session::put('Traders_id', $user->id);

            Profile::create([
                'user_id'           =>$user->id,
                'business_name'     =>$data['business_name'],
                'business_email'    =>$data['business_email'],
                'business_cont_no'  =>$data['business_cont_no'],
                'website'           =>$data['website'],
                'location'          =>$data['location'],
                'full_address'      =>$data['full_address'],
                'types_of_business' =>$data['types_of_business'],
                'prod_or_serv_offe' =>$subcat,
                'occupation'        =>$data['occupations'],
            ]);

            // return response('success', 200);    
            }else{
                    $user =  User::create([
                        'name'       =>$data['name'],
                        'email'      =>$data['email'],
                        'mobile'     =>$data['mobile'],
                        'role'       => 4,
                        'password'   =>$hashpassword, 
                    ]);
                    UserProfile::create([
                        'user_id'           =>$user->id,
                        'location'          =>$data['location'],
                        'occupation'        =>$data['occupations'],
                    ]);
                    // return response('success', 200);    
                }
                $datasend = array (
                    'password' =>$newpassword,
                    'name'   =>$data['name'],
                    'email' =>$data['email']
                );
        
                Mail::send('mail',$datasend , function ($m) use ($datasend) {
                    $m->from($datasend['email']);
                    $m->to('himanshu.nikil.gupta@gmail.com');
                    $m->subject('Your Request For Password');
                });
                
                //this is 4 send data to UI
                if($data['chkPassPort'] =='1'){
                    return response('traders', 200); 
                }else{
                    return response('success', 200); 
                }
                
    }   

     //Here is Send Forget Password link and Save into DB       
    public function ForgetPasswordSend(Request $data)
    {
        $validator = Validator::make($data->all(), [
         'email'             =>'required|string|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }
        
        if (User::where('email', '=', $data['email'])->exists()) {
            $username=User::where('email',$data['email'])->value('name');

            $token_id = str_random(60);
            //return response($token_id);

            DB::table('password_resets')->insert([
                'email'         => $data['email'], 
                'token'         => $token_id,
                'created_at'    => \Carbon\Carbon::now(),
                ]
            );

            $datasend = array (
                'name'   =>$username,
                'token'  =>$token_id,
                'email'  =>$data['email']
            );
    
            Mail::send('forgetmail',$datasend , function ($m) use ($datasend) {
                $m->from($datasend['email']);
                $m->to('himanshu.nikil.gupta@gmail.com');
                $m->subject('Your Request For Password Reset');
            });
            return response('Success', 200); 
        }        
        else{

            return response('not success', 400); 
        }
    }

    //This is For Reset Page Show
    public function SendResetLink($token)
    {
        $data = DB::table('password_resets')->where('token', $token)->first();

        $expiredate =  Carbon::parse($data->created_at)->addMinutes(10);
        $current_time = Carbon::now();
        if($current_time->lte($expiredate)){

            return view('home/resets', compact('data'));
            
        }else{
            return "This Link has Been Expired";
        }
      
    }
  
    public function ResetForgetPassword($token,Request $r)
    {
        $validator = Validator::make($r->all(), [
            'password'=> 'required|min:6|confirmed',
           ]);
   
           if ($validator->fails()) {
               return response()->json(['errors'=>$validator->errors()]);
           }

      
        $hashpassword = Hash::make($r['password']);    
        // return $hashpassword;    

        $data = DB::table('password_resets')->where('token', $token)->value('email');

        $user_password = User::where('email',$data)->first();
            $data = [
                'password'     => $hashpassword,
        ];
        $user_password->update($data);

        return response("Success", 200);

    }




}

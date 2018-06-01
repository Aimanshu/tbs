<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use Auth;
use App\User;
use App\Model\Category;
use App\CategoryAdmin;
use Session;
use App\Enquiry;
use App\Model\Contact;
use App\Model\MainCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Model\Profile;
use App\Model\User\UserProfile;
use Mail;
use DB;
use Carbon\Carbon;
use App\Proposal;




class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }


   //show admin profile on admin dashboard

    public function show_admin()
    {
       $admin = Auth::user();
       $admin->load('adminmaincategory.maincategory');
       return view('admin.pages.index',compact('admin'));
    }

    // update admin profile on user dashboard
     public function update_admin_dash($id, Request $r)
    {
        $validatedData = $r->validate([
            'name'      =>'required|string|max:255',
            'number'    =>'required|max:10',
        ]);
        $update_admin = User::where('id',$id)->first();

       $data = [
            'name'     => $r['name'],
            'mobile'   => $r['number']
       ];
        
        $update_admin->update($data);
        Session::flash('flash_message','Successfully User Update.');   
        return back();
    }

    public function index()
    {
        $users = User::with('admincategory.category')->where('role', 2)->get();
        //return "$users";
        $categories = Category::doesntHave('admincategory')->get();
    	return view('super_admin.pages.admin.index',compact('users','categories'));
    }

    public function create()
    {
    	return view('super_admin.pages.admin.create');
    }

    public function update($id,Request $request)
    {
        $categorieID = $request->category;
        $categorie_admin=CategoryAdmin::where('admin_id',$id)->update(['category_id' => $categorieID]);
        Session::flash('flash_message','Successfully Update.');    
        return back();
    }

     public function update_status_admin(Request $request)
    {
        return "hiii";
    }

   //This Is For Show All Enquiry On Admin Dashboard
    public function ViewEnquiry()
    {
        $authcatId = Auth::user();
        $authcatId->load('admincategory');

        $mainid = $authcatId->admincategory->main_category_id;

        $enquirys = Enquiry::whereHas('category', function ($q) use($mainid) {
                $q->where('main_category_id', $mainid);
            })->with(['category','category.main_category', 'proposals'])->get();

        return view('admin.pages.enquiry.index',compact('enquirys'));
    }
   

    //Admin Dashboard For Assign Enquery
   public function AssignEnquiry($id,request $request)
    {
        $traders = User::where('role', 3)->whereDoesntHave('enquries', function($q) use($id) {
        $q->where('enquiry_id', $id);})->with('trader_profile')->get();

        //return $traders;
        $enquiry = Enquiry::where('id',$id)->first();
        return view('admin.pages.enquiry.edit',compact('enquiry','traders'));
    }

    // update status admin
    public function update_status($id,Request $request)
    {
        $status=Enquiry::where('id',$id)->value('status');
       
        if($status==0) {
            $update=Enquiry::where('id',$id)->update(['status' => 1]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }else {
            $update=Enquiry::where('id',$id)->update(['status' => 0]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }
    }

    // assining enquiry to traders
    public function UpdateEnquiry($id,Request $request)
    {
        $adminId = Auth::id();
        // make validation dor tradername  integer|required
        $validatedData = $request->validate([
            'traderid'        => 'required',
        ]);
        $enquiry = Enquiry::findOrfail($id);
        $trader = User::findOrfail($request->traderid);
        if ($enquiry->assigned == 1) {
            $enquiry->traders()->detach();
        }
        $enquiry->traders()->attach($trader);
        $enquiry->update(['assigned' => 1],['admin_id' =>$adminId]);

        Session::flash('flash_message','Successfully Update.');   
        return back();
    }

    public function AdminTradersList()
    {
        $admin = Auth::user();
        $admin->load('adminmaincategory.category');
        $maincategory = MainCategory::where('id',$admin->admincategory->main_category_id)->with('categories')->first();	
        // return $maincategory;
        return view('admin.pages.traders.create',compact('maincategory'));
    }
   
    public function AdminTradersRegistation(Request $data)
    {
        $authcatId = Auth::id();
        
        //  return $request['isbuessiness'];
         if($data['isbuessiness'] =='1')
        {
            $validatedData = $data->validate([
            // $validator = Validator::make($data->all(), [
                'name'              =>'required|string|max:255',
                'email'             =>'required|string|email|max:255|unique:users',
                'mobile'            =>'required|min:10',
                'isbuessiness'       =>'required|boolean',
                'business_name'     =>'required|string',
                'business_email'    =>'required|string',
                'business_cont_no'  =>'required|string|min:10',
                'website'           =>'required|string',
                'location'          =>'required|string',
                'full_address'      =>'required|string',
                'types_of_business' =>'required|string',
                'subcategory'       =>'required',
                ]);
        }else{
            $validatedData = $data->validate([
            // $validator = Validator::make($data->all(), [
                'name'              =>'required|string|max:255',
                'email'             =>'required|string|email|max:255|unique:users',
                'mobile'            =>'required|min:10',
                'location'          =>'required|string',
                'occupations'       =>'required|string',
            ]);
        }
        // return $validatedData;

        // Hashing Password
        $newpassword =rand(10, 999999); 
        $hashpassword = Hash::make($newpassword);

        $subcat = json_encode($data['subcategory']);
        if($data['isbuessiness'] =='1')
        {
            $user =  User::create([
                'name'       =>$data['name'],
                'email'      =>$data['email'],
                'mobile'     =>$data['mobile'],  
                'password'   =>$hashpassword, 
                'role'       => 3,
                'issadmin'   =>$authcatId, 
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
                'prod_or_serv_offe' =>$subcat,
                'occupation'        =>$data['occupations'],
            ]);
            }else{
                    $user =  User::create([
                        'name'       =>$data['name'],
                        'email'      =>$data['email'],
                        'mobile'     =>$data['mobile'],
                        'role'       => 4,
                        'password'   =>$hashpassword, 
                        'issadmin'   =>$authcatId,
                    ]);
                    UserProfile::create([
                        'user_id'           =>$user->id,
                        'location'          =>$data['location'],
                        'occupation'        =>$data['occupations'],
                    ]);
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
                
                Session::flash('flash_message','Successfully Update.');   
                return back();
    }

    public function AdminTraderList()
    {
        $authcatId = Auth::id();
        $traders = User::with('trader_profile')->where('role', 3)->where('issadmin', $authcatId)->get();
        $admin = Auth::user();
        $admin->load('adminmaincategory.category');
        $maincategory = MainCategory::where('id',$admin->admincategory->main_category_id)->with('categories')->first();	
        return view('admin.pages.traders.index',compact('traders','maincategory'));
    }


    public function AdminUpdateTraderDetails($id,Request $data)
    {
 
        User::where('id', $id)
            ->update([
                'name'   =>$data['name'],
                'email'  =>$data['email'], 
                'mobile' =>$data['mobile']
            ]);

        $subcat = json_encode($data['prod_or_serv_offe']);

        Profile::where('user_id', $id)
            ->update([
                'business_name'      =>$data['business_name'],
                'business_email'     =>$data['business_email'],
                'business_cont_no'   =>$data['business_cont_no'],
                'website'            =>$data['website'],
                'location'           =>$data['location'],
                'full_address'       =>$data['full_address'],
                'types_of_business'  =>$data['types_of_business'],
                'prod_or_serv_offe'  =>$subcat,
                'occupation'         =>$data['occupation']
           ]);

        Session::flash('flash_message','Successfully Update.');    
        return back();

    }

    public function AdminProposalList($id)
    {
        $proposals = Proposal::where('enquiry_id',$id)->get();
        return view('admin.pages.enquiry.proposallist',compact('proposals'));
    }


    public function AdminApproveStatus($id)
    {
        $proposals=Proposal::where('id',$id)->value('issadmin_approved');

        if($proposals==0) {
            $update=Proposal::where('id',$id)->update(['issadmin_approved' => 1]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }else {
            $update=Proposal::where('id',$id)->update(['issadmin_approved' => 0]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }

    }






}

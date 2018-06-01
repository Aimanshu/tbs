<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\User;
use App\Model\Category;
use App\CategoryAdmin;
use App\Category\AddCategoryController;
use App\Enquiry;
use App\Model\Question;
Use Auth;
use Illuminate\Support\Facades\Hash;
use App\Model\Contact;
use App\Model\User\UserProfile;
use App\Model\MainCategory;
use App\Model\Advertisement;
use App\Payments;



class SuperAdminController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['GetSubCategoryDetails']);
    }

    public function index ()
    {
        return view ('admindashboad');
    }

    //get user profile on user dashboard

    public function profile ()
    {
       $user = Auth::user();
        return view('users.pages.users.index',compact('user'));
    }
    
    // update user profile on user dashboard
     public function update_user_dash($id, Request $r)
    {
        $validatedData = $r->validate([
            'name'      =>'required|string|max:255',
            'number'    =>'required|max:10',
        ]);

       $update_user = User::where('id',$id)->first();
       $data = [
            'name'     => $r['name'],
            'mobile'   => $r['number']
       ];
        $update_user->update($data);

        Session::flash('flash_message','Successfully User Update.');   
        return back();
    }

    //create Admin with The Category (id)
    public function SuperAdminAddRole(Request $request)
    {
        $validatedData = $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email',
            'mobile'      => 'required|max:10|unique:users',
            'password'    => 'required|max:255|min:6',
            'category'    => 'required',
        ]);

        $user =  User::create([
            'name'       => $request['name'],
            'email'      => $request['email'],
            'mobile'     => $request['mobile'],
            'business'   => $request['business'],   
            'password'   => bcrypt($request['password']),
            'role'       => 2,
        ]);
     
        $categoryadmin =  CategoryAdmin::create([
            'main_category_id'       => $request['category'],
            'admin_id'               => $user->id,
        ]);

        Session::flash('flash_message','Successfully Saved.');    
        return back();
    }

    //This Function For See Admin And Category Details Nd Join
    public function joinadmincategoryfn()
    {
       // $categories     = Category::get();
        $categories     = Category::doesntHave('admincategory')->get();
        $users          = User::doesntHave('admincategory')->where('role', 2)->get();
        $categoryadmins  = CategoryAdmin::with('admin', 'category')->get();

        return view('super_admin/pages/assign_admin/create', compact('categories','users','categoryadmins'));
    }

     //This Is For Save Admin nd Category Id Into DB
     public function AdminCategorySendDataBase(Request $request)
     {
         //dd($request->all());    
        $validatedData = $request->validate([
             'category'        => 'required',
             'admin'           => 'required',
         ]);
 
         $categoryadmin =  CategoryAdmin::create([
             'category_id'       => $request['category'],
             'admin_id'          => $request['admin'],
         ]);
 
        Session::flash('flash_message','Successfully Saved.');    
        return back();
     }

     //This Is To Show list Assign All Data
     Public function GetAllCategory()
    {
        $categoryadmins  = CategoryAdmin::with('admin', 'category')->get();
        $categories = Category::doesntHave('admincategory')->get();
        return view('super_admin.pages.assign_admin.index',compact('categoryadmins','categories'));
    }

   public function show_user_list()
   {
      $role = Auth::user()->role;
      if($role ==1)
      {
       $users = User::with('users_profile')->where('role', 4)->get();
       return view('super_admin.pages.users.index',compact('users'));
     }
     else
     {
        $id = Auth::user()->id;
        $users = User::with('users_profile')->where('role', 4)->where('issadmin',$id)->get();
        return view('admin.pages.users.index',compact('users'));
     }

   }

    // update status user
    public function update_status_user($id,Request $request)
    {
      $status=User::where('id',$id)->value('status');
       if($status==0) {
            $update=User::where('id',$id)->update(['status' => 1]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }else {
            $update=User::where('id',$id)->update(['status' => 0]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }

    }

   //This Is For Show All Enquiry On SuperAdmin Dashboard
    public function GetAllEnquiry()
    {
        $enquirys     = Enquiry::with('user', 'category')->paginate(10);
        return view('super_admin.pages.enquiry.index',compact('enquirys'));
    } 

    // update status Enquiry
    public function update_status_enquiry($id,Request $request)
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
   
   // Assigned category to admin
    public function assigned_category_update($id,Request $request)
    {
        $categorieID = $request->category;
        $categorie_admin=CategoryAdmin::where('admin_id',$id)->update(['category_id' => $categorieID]);

        Session::flash('flash_message','Successfully Update.');    
        return back();
    }

    // Assigned category to admin Delete
    public function assigned_category_delete($id,Request $request)
    {
         $user_id=CategoryAdmin::where('id',$id)->first();
         $user_id->delete();
         //Session::flash('flash_message','Successfully Update.');    
         return back();
    }


     public function ViewAddQuestion($id)
     {
        $category = Category::where('id',$id)->first();
        return view('super_admin.pages.category.addquestion',compact('category'));
     }
    
     //SubCategory Here we can add Question
     public function AddQuestionDataBase($id, Request $r)
     {
        $validatedData = $r->validate([
            'question_title'      =>  'required|string|max:255',
            'description'         => 'required|string|max:255',
            'questiontype'        =>  'required',
        ]);

         $options = $r->options;
         $options_json = null;
         if(count($options)) {
             foreach($options as $key =>  $option) {
                $key++;
                $options_json[] = [
                    'value' => $key,
                    'lable' => $option
                ];
            }
            $options_json = json_encode($options_json);
         }

         $data = [
             'title'        => $r->question_title,
             'category_id'  => $id,
             'description'  => $r->description,
             'answer_type'  => $r->questiontype,
             'status'       => 1,
             'options'      => $options_json

         ];
         //return $data;
         Question::create($data);
         Session::flash('flash_message','Successfully.');    
         return back();
     }

     //For Show All Question on SuperAdmin Dashboard
     public function ShowQuestion($slug)
     {
        $questions = Category::where('slug', $slug)->with('questions')->first();
        return view('super_admin.pages.category.showquestion',compact('questions'));
      }

      //users Question Get  
     public function ShowMyQuestion()
     {
         $id = Auth::user()->id;
         $questions = Enquiry::where('user_id', $id)->get();
         return view('users.pages.question.showquestion',compact('questions'));
     }

     //User Dashboard Get all Category 
     public function ShowMyCategory()
     {
        $id = Auth::user()->id;
        $categories  = Enquiry::where('user_id', $id)->with('category')->get();

        $mainid=$categories[0]->category->main_category_id;

        $enquirys = Enquiry::whereHas('category', function ($q) use($mainid) {
            $q->where('main_category_id', $mainid);
        })->with(['category','category.main_category', 'proposals' => function($qr){
            $qr->where('issadmin_approved', 1);
        }])->get();

        return view('users.pages.question.index',compact('categories'));
     }
     
     public function TradersStatus($id,Request $request)
    {
        $status=User::where('id',$id)->value('status');
        if($status==0) {
            $update=User::where('id',$id)->update(['status' => 1]);
            Session::flash('flash_message','Successfully Update.');    
            return back();
         }else {
            $update=User::where('id',$id)->update(['status' => 0]);
            Session::flash('flash_message','Successfully Update.');    
            return back();
         }
    }

    public function ChangePassword($id, Request $r)
    {
        $validatedData = $r->validate([
            'opassword'    =>'required|max:6',
            'password'     =>'required|confirmed|max:6',
        ]);

        $password=User::where('id',$id)->value('password');
        if (Hash::check($r['opassword'], $password)) {
         $hashpassword = Hash::make($r['password']);    
        $user_password = User::where('id',$id)->first();
            $data = [
                'password'     => $hashpassword,
        ];
            $user_password->update($data);
            Session::flash('flash_message','Successfully Password Update.');   
            return back();
        }
        else
        {
            Session::flash('flash_message2','Old Password Do not Match');   
            return back();
        }
    }

    public function AddUserPassword($id, Request $r)
    {
        $validatedData = $r->validate([
            'password'     =>'required|confirmed|max:6',
        ]);

        $hashpassword = Hash::make($r['password']);    
        $user_password = User::where('id',$id)->first();
            $data = [
                'password'     => $hashpassword,
        ];

        $user_password->update($data);
        Session::flash('flash_message','Successfully Password Update.');   
        return back();
    }

    public function AllContactsGet()
    {
        $contacts = Contact::get();
        return view('super_admin.pages.contact.index',compact('contacts'));
    }

    public function UpdateUserDetails($id,Request $data)
    {
        User::where('id', $id)
            ->update([
                'name'   => $data['name'],
                'email'  =>  $data['email'], 
                'mobile' => $data['mobile']
            ]);

        UserProfile::where('user_id', $id)
            ->update([
                'location'           => $data['location'],
                'occupation'         => $data['occupation']
           ]);

        Session::flash('flash_message','Successfully Update.');    
        return back();
    }


    public function GetSubCategoryDetails($id)
    {
        $maincategory = MainCategory::where('id',$id)->with('categories')->first();	
        return $maincategory->categories;
    }

    public function CreateAdvertisement()
    {
        return view('super_admin.pages.advertiment.create');
    }
    
    public function SaveAdvertisement(Request $request)
    {
        $validatedData = $request->validate([
            'titles'         => 'required|string|max:255',
            'description'    => 'required|string|max:255',
            'image'          => 'required|mimes:jpeg,bmp,png,jpg',
        ]);

        $path = $request->file('image')->store('image');
        $advertisements =  Advertisement::create([
            'image_title'     =>$request['titles'],
            'description'     =>$request['description'],
            'image'           =>$path,
        ]);
        
       Session::flash('flash_message','Successfully Saved.');    
       return back();
    }

    public function GetAdvertisement()
    {
        $advertiments = Advertisement::get();
        return view('super_admin.pages.advertiment.view',compact('advertiments'));
    }

    public function UpdateAdvertiment($id,Request $r)
    {
        $validatedData = $r->validate([
            'image_title'        =>'required|string|max:255',
            'description'        =>'required|string|max:255',
            'image'              =>'nullable|mimes:jpeg,bmp,png,jpg',
        ]);
         
        $filename = '';
        $advertisement = Advertisement::where('id',$id)->first();

        if($r->hasfile('image')) {
            if($advertisement->image) {
            unlink(storage_path('app/'.$advertisement->image));
            $filename = $r->image->store('image');  
            }else{
                $filename = $r->image->store('image');  
            }
        }else {
            $filename = $advertisement['image'];
        }

       $data = [
            'image_title'         => $r['image_title'],
            'description'        => $r['description'],
            'image'  => $filename
       ];
        $advertisement->update($data);
        Session::flash('flash_message','Successfully Update.');   
        return back();
    }

    public function EditQuestion($id,Request $r)
    {
       $questions = Question::where('id', $id)->first();
       return view('super_admin.pages.category.editquestion',compact('questions'));  
    }    

    //This is All
    public function PaymentList()
    {
        $payments = Payments::with('payment')->get();
        return view('super_admin.pages.payment.index',compact('payments'));  
    }

    public function ApiSingleQuestions($id)
    {
        $questions = Question::where('id', $id)->first();
        return $questions;
    }

    public function SuperadminEditQuestions($id,Request $r)
    {
        $validatedData = $r->validate([
            'title'      =>'required|string|max:255',
            'description'         =>'required|string|max:255',
            'questiontype'        =>'required',
        ]);


         $options = $r->options;
         $options_json = null;
         if(count($options)) {
             foreach($options as $key =>  $option) {
                $key++;
                $options_json[] = [
                    'value' => $key,
                    'lable' => $option
                ];
            }
            $options_json = json_encode($options_json);
         }

         $questions = Question::where('id',$id)->first();
         
         $data = [
             'title'        => $r->title,
             'description'  => $r->description,
             'answer_type'  => $r->questiontype,
             'status'       => 1,
             'options'      => $options_json
         ];

         $questions->update($data);

         Session::flash('flash_message','Successfully.');    
         return back();
    }

    public function AdvertimentStatusUpdate($id,Request $r)
    {
        $status=Advertisement::where('id',$id)->value('status');
        if($status==0) {
            $update=Advertisement::where('id',$id)->update(['status' => 1]);
            Session::flash('flash_message','Successfully Update.');    
            return back();
         }else {
            $update=Advertisement::where('id',$id)->update(['status' => 0]);
            Session::flash('flash_message','Successfully Update.');    
            return back();
         }
    }


}



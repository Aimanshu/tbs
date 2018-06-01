<?php

namespace App\Http\Controllers\SuperAdmin\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\Category;
use App\CategoryAdmin;
use Session;
use App\Model\MainCategory;


class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::with('adminmaincategory.maincategory')->where('role', 2)->paginate(10);
        $MainCategorys = MainCategory::doesntHave('adminmaincategory')->get();
    	return view('super_admin.pages.admin.index',compact('users','MainCategorys'));
    }

    public function create()
    {
        $MainCategorys = MainCategory::doesntHave('adminmaincategory')->get();
    	return view('super_admin.pages.admin.create',compact('MainCategorys'));
    }

    public function update($id,Request $request)
    {
        $users = User::where('id',$id)->first();
        
        $validatedData = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email',
            'mobile'       => Rule::unique('users')->ignore($users->id),
            'category'     => 'required' 
        ]);

        $data = [
            'name'     => $request->name,
            'email'    => $request->email,
            'mobile'    => $request->mobile,
        ];
        
        $users->update($data); // update Admin Info

        $categorieID = $request->category;
        $categorie_admin=CategoryAdmin::where('admin_id',$id)->update(['main_category_id' => $categorieID]);

        Session::flash('flash_message','Successfully Update.');    
        return back();

    }

    public function CheckCategory($id)
    {
        $MainCategorys_admin_check=CategoryAdmin::where('main_category_id',$id)->first();
         if(!$MainCategorys_admin_check) {
            return response('available', 200);
        }
        else
        {
            return response('notavailable', 400);
        }
    }

     public function update_status_admin($id,Request $request)
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

   
    
}

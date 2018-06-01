<?php

namespace App\Http\Controllers\SuperAdmin\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\MainCategory;
use Session;
use App\User;
use App\Enquiry;


class AddCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories     = Category::get();
        //return $categories ;
        return view('super_admin.pages.category.index',compact('categories'));
    }

    public function create()
    {
        $main_categories = MainCategory::get();
        return view('super_admin.pages.category.create',compact('main_categories'));
    }


    public function create_main_category()
    {
        return view('super_admin.pages.main_category.create');
    }

    public function list_main_category()
    {
        $category = MainCategory::get();

        return view('super_admin.pages.main_category.index',compact('category'));
    }

    public function assign_list_main_category()
    {
         $main_categories = MainCategory::with('categories')->get();
         //return $main_categories;
        return view('super_admin.pages.main_category.list',compact('main_categories'));
    }

    public function assign_main_category()
    {
         $main_categories = MainCategory::get();

         $categories = Category::get();

        return view('super_admin.pages.main_category.assign',compact('main_categories','categories'));
    }


    public function main_category_add(Request $request)
    {
        $maincat = $request['category_name'];
        $main_categories = MainCategory::where('name',$maincat)->first();//this is For Check Name Already Save ot not

        if(!$main_categories){
            $validatedData = $request->validate([
                'category_name'      =>'required|string|max:255',
                'image'              =>'required|mimes:jpeg,bmp,png,jpg',
            ]);
    
            $path = $request->file('image')->store('image');
            $slug = str_slug($request->category_name, '-');
            MainCategory::create([
                'name'         => $request['category_name'],
                'image'        => $path,
                'slug'         => $slug,
                'description'  => $request['description']
            ]);
            
            Session::flash('flash_message','successfully saved.');
            return back();
        }
        else
        {
            Session::flash('flash_message2','This Category Already Taken.');
            return back();
        }

        
        
    }

    public function update_category($id, Request $r)
    {
        $validatedData = $r->validate([
            'category_name'      =>'required|string|max:255',
            'image'              =>'nullable|mimes:jpeg,bmp,png,jpg',
        ]);
         
        $filename = '';
        $categorie = MainCategory::where('id',$id)->first();

        if($r->hasfile('image')) {
            if($categorie->image) {
            unlink(storage_path('app/'.$categorie->image));
            $filename = $r->image->store('image');  
            }else{
                $filename = $r->image->store('image');  
            }

        }else {

            $filename = $categorie['image'];
            
        }

       $data = [
            'name'         => $r['category_name'],
            'image'        => $filename,
            'description'  => $r['description']
       ];
        
        $categorie->update($data);

        Session::flash('flash_message','Successfully Update.');   
        return back();
    }

    public function store(Request $request)
    {
        $subcat = $request['category_name'];
        $Category =Category::where('name',$subcat)->first();//this is For Check Name Already Save ot not

        if(!$Category){
          
            $validatedData = $request->validate([
                'category_name'      =>'required|string|max:255',
                'image'              =>'required|mimes:jpeg,bmp,png,jpg',
                'main_category'      =>'required'
            ]);
    
            $path = $request->file('image')->store('image');
            $slug = str_slug($request->category_name, '-');
    
            $Category =Category::create([
                'name'             => $request['category_name'],
                'image'            => $path,
                'slug'             => $slug,
                'description'      => $request['description'],
                'main_category_id' => $request->main_category
            ]);
            
            $main_cat = MainCategory::findOrfail($request->main_category);
            $cat = Category::findOrfail($Category->id);
            $main_cat->categories()->attach($cat);
    
            Session::flash('flash_message','successfully saved.');
            return back();
             
        }
        else
        {
            Session::flash('flash_message2','This Sub Category Already Taken.');
            return back();
        }
        
    }



    public function update($id, Request $r)
    {
        $validatedData = $r->validate([
            'category_name'      =>'required|string|max:255',
            'image'              =>'nullable|mimes:jpeg,bmp,png,jpg',
        ]);

        $filename = '';
        
        $category = Category::where('id',$id)->first();

        if($r->hasfile('image')) {
			if($category->image) {
			unlink(storage_path('app/'.$category->image));
			$filename = $r->image->store('image');	
			}else{
                $filename = $r->image->store('image');	
            }

		}else {

            $filename = $category['image'];
            
        }

       $data = [
            'name'         => $r['category_name'],
            'image'        => $filename,
            'description'  => $r['description']
       ];
        
        $category->update($data);

        Session::flash('flash_message','Successfully Update.');   
        return back();
    }

    // ataching category with sub category
    
    public function attached_cat_to_maincat(Request $r)
    {
        $validatedData = $r->validate([
            'main_category'      =>'required',
            'category'           =>'required'
        ]);

        $main_cat = MainCategory::findOrfail($r->main_category);
        $cat = Category::findOrfail($r->category);

        $main_cat->categories()->attach($cat);
        Session::flash('flash_message','Assigned Category To Subcategory Successfully saved.'); 
        return back();

    }

    
   //update status main category list
   public function update_status_main_category($id,Request $request)
    {
         $status=MainCategory::where('id',$id)->value('status');
       if($status==0) {
            $update=MainCategory::where('id',$id)->update(['status' => 1]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }else {
            $update=MainCategory::where('id',$id)->update(['status' => 0]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }
    }

    //update status category list
        public function update_status_category($id,Request $request)
        {
         $status=Category::where('id',$id)->value('status');
        if($status==0) {
            $update=Category::where('id',$id)->update(['status' => 1]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }else {
            $update=Category::where('id',$id)->update(['status' => 0]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }
    }

    //This is For Update Active/Deactive Button
    public function UpdateStatusCategory($id)
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
    

}

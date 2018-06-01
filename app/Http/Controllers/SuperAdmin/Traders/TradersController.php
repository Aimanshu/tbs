<?php

namespace App\Http\Controllers\SuperAdmin\Traders;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\Category;
Use DB;
use App\Model\Profile;
use Session;
use App\Model\MainCategory;

class TradersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $traders = User::with('trader_profile')->where('role', 3)->get();
        $categories = Category::doesntHave('admincategory')->get();	
        // return $traders;
        return view('super_admin.pages.traders.index',compact('traders','categories'));
    }

    public function create()
    {
        $main_categories = MainCategory::get();
        $categories = Category::doesntHave('admincategory')->get();	
        return view('super_admin/pages/traders/create',compact('categories','main_categories'));
    }

    public function UpdateTraderDetails($id,Request $data)
    {
        User::where('id', $id)
            ->update([
                'name'   => $data['name'],
                'email'  =>  $data['email'], 
                'mobile' => $data['mobile']
            ]);

        $subcat = json_encode($data['prod_or_serv_offe']);

        Profile::where('user_id', $id)
            ->update([
                'business_name'      => $data['business_name'],
                'business_email'     => $data['business_email'],
                'business_cont_no'   => $data['business_cont_no'],
                'website'            => $data['website'],
                'location'           => $data['location'],
                'full_address'       => $data['full_address'],
                'types_of_business' =>$data['types_of_business'],
                'prod_or_serv_offe' =>$subcat,
                'occupation'         => $data['occupation']
           ]);

        Session::flash('flash_message','Successfully Update.');    
        return back();

    }

    
}

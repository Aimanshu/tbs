<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
Use Auth;
use App\User;
use App\Model\Category;
use App\CategoryAdmin;
use App\Proposal;
use App\Enquiry;



class UserController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function myr_equest ()
    {

        return view ('users.pages.requests.index');
    }

    public function UsersApproveStatus($id)
    {
        $proposals=Proposal::where('id',$id)->value('issuser_accept');
        if($proposals==0) {
            $update=Proposal::where('id',$id)->update(['issuser_accept' => 1]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }else {
            $update=Proposal::where('id',$id)->update(['issuser_accept' => 0]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }
    }

    public function UserProposalList($id)
    {
        $id = Auth::user()->id;
        $categories  = Enquiry::where('user_id', $id)->with('category')->get();

        $mainid=$categories[0]->category->main_category_id;

        $enquirys = Enquiry::whereHas('category', function ($q) use($mainid) {
            $q->where('main_category_id', $mainid);
        })->with(['category','category.main_category', 'proposals' => function($qr){
            $qr->where('issadmin_approved', 1);
        }])->get();

        $proposals=$enquirys[0]->proposals;
        return view('users.pages.question.proposallist',compact('proposals'));
    }

    public function UsersApproveStatus2($id)
    {
        $proposals=Proposal::where('id',$id)->value('issuser_accept');
        if($proposals==0) {
            $update=Proposal::where('id',$id)->update(['issuser_accept' => 1]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }else {
            $update=Proposal::where('id',$id)->update(['issuser_accept' => 0]);
             Session::flash('flash_message','Successfully Update.');    
             return back();
        }
    }


    
}

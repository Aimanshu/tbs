<?php

namespace App\Http\Controllers\Trader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
Use Auth;
use App\User;
use App\Model\Category;
use App\CategoryAdmin;
use App\Enquiry;
use App\Proposal;


class TraderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function orders ()
    {
        return view ('traders.pages.orders.index');
    }

    //For Show Traders Profile Information
     public function index ()
    {
        $userId = Auth::id();
        $traders = User::where('id', $userId)->get();
        return view('traders.pages.index',compact('traders'));
    }

    //For Show All Assign list On Traders Dashboard
    public function ViewAllRequestList()
    {
        $trader = Auth::user();
        $trader->load('enquries');    
        return view('traders.pages.enquiry.index',compact('trader'));
    }

    // update trader
    public function update_tra ($id,Request $r)
    {
         $validatedData = $r->validate([
            'name'      =>'required|string|max:255',
            'number'    => 'required|max:10',
        ]);
        $users = User::where('id',$id)->first();
        $data = [
                'name'         => $r['name'],
                'mobile'  => $r['number']
        ];

        $users->update($data);
        Session::flash('flash_message','Successfully Update.');   
        return back();
    }

    public function TraderSendProposal($id)
    {
        $enqueryid=$id;
        return view('traders.pages.enquiry.createproposal',compact('enqueryid'));
    }

    public function SaveProposal($id,Request $request)
    {
        $userId = Auth::id();
        $validatedData = $request->validate([
            'content'      =>'required',
            'files'        =>'nullabel|mimes:jpeg,bmp,png,pdf',
        ]);
         
         if($request->file('image') == null)   
         {
            $Proposals =  Proposal::create([
                'enquiry_id'       => $id,
                'traders_id'       =>$userId,
                'description'      =>$request['content'],
            ]);
         }
         else{
                $filetpe=0;
                $path = $request->file('image')->store('image');
                $ext = $request->file('image')->extension();
                if($ext == 'pdf')
                {
                    $filetpe=1;
                }

                $Proposals =  Proposal::create([
                    'enquiry_id'       => $id,
                    'traders_id'       =>$userId,
                    'file_type'        =>$filetpe, 
                    'description'      =>$request['content'],
                    'files'            =>$path,
                ]);
         }

        Session::flash('flash_message','Successfully Saved.');    
        return back();
        
    }

    public function TraderProposalList()
    {
        $userId = Auth::id();
        $proposals = Proposal::where('traders_id', $userId)->get();
        return view('traders.pages.enquiry.proposallist',compact('proposals'));
    }


}

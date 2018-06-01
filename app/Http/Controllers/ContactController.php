<?php

namespace App\Http\Controllers;
//use App\Model\Request;
use Illuminate\Http\Request;
use Validator;
use App\Model\Category;
use App\Model\MainCategory;
use Session;
use Auth;
use App\Model\Contact;


class ContactController extends Controller
{

    public function Store(Request $data)
    {
        $validator = Validator::make($data->all(), [
                'name'              =>'required|string|max:255',
                'email'             =>'required|string|email|max:255',
                'phone'             =>'required|min:10',
                'subject'           =>'required|max:255',
            ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        $contacts =  Contact::create([
            'name'       =>$data['name'],
            'email'      =>$data['email'],
            'phone'      =>$data['phone'],  
            'subject'   =>$data['subject'], 
            'status'    => 0,
        ]);

        return response('success', 200); 

    }
}

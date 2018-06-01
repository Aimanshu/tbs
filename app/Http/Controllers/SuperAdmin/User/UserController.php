<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

}

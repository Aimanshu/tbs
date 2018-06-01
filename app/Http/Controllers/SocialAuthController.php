<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Socialite;
use Auth;
use App\User;

class SocialAuthController extends Controller
{

    public function redirectToProvider($provider, Request $request)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider, Request $request)
    {
        $socialuser = Socialite::driver($provider)->user();

        // return collect($socialuser);

        $url = null;
        // if($provider == "facebook")
        // {
        //     $url = collect($socialuser->user)["link"];
        // }      
        
        $user = User::where('email',$socialuser->email)->first();

        //  return $user;    

        if(!$user) {
            
            $data = [
                'name'                => $socialuser->name,
                'email'               => $socialuser->email,
                'role'                => 4,
                'status'              => 1,
                'remember_token'      => str_random(32),
                'password'            => null,
                // 'provider'            => $provider,
                'avatar'              => $socialuser->getAvatar(),
                'register_type'       =>$provider,
                'user_profile_link'   => $url
            ];

            //  return $data;
            $user = User::create($data);
            }else {
                $user->update(['avatar' => $socialuser->getAvatar(), 'user_profile_link'   => $url]);
            }

        Auth::login($user);

        return redirect()->intended("/dashboard");
       // return collect($user);
    }

}

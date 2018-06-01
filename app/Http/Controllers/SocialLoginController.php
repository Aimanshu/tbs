<?php

namespace App\Http\Controllers\Auth\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Auth;

class SocialLoginController extends Controller
{

    public function redirectToProvider($provider, $session = null)
    {
        // dd($session);
        if ($session) {
            session(['video_url' => $session]);
        }
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $socialuser = Socialite::driver($provider)->user();
        dd($socialuser);
        $url = null;
        
        if($provider == "facebook")
        {

            $url = collect($socialuser->user)["link"];
        
        }      
         //return coll($socialuser);

        $user = User::where('email',$socialuser->email)->first();
        if(!$user) {
            
            $data = [
                'name'                => $socialuser->name,
                'email'               => $socialuser->email,
                'role'                => 'guest',
                'status'              => 1,
                'remember_token'      => str_random(32),
                'password'            => null,
                'provider'            => $provider,
                'avatar'              => $socialuser->getAvatar(),
                'user_profile_link'   => $url
            ];

            $user = User::create($data);

        }else {
            
            $user->update(['avatar' => $socialuser->getAvatar(), 'user_profile_link'   => $url]);
            
        }

        Auth::login($user);
        $redirecturl = session('video_url');
        if ($redirecturl) {
            header("Location: $redirecturl");
            // return \Redirect::to($redirecturl);
            // return redirect()->to($redirecturl);
        }
        
        return redirect()->intended("/$user->role/dashboard");
       // return collect($user);
    }
  
}

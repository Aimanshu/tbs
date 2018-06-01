<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'mobile', 'isbusiness', 'role','issadmin','register_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function adminmaincategory()
    {
        return $this->hasOne('App\CategoryAdmin', 'admin_id');
    }

    //this is For Main Category Single 
    public function admincategory()
    {
        return $this->hasOne('App\CategoryAdmin', 'admin_id');
    }

    //this is For Sub Category Single 
    public function trader_profile()
    {
        return $this->hasOne('App\Model\Profile', 'user_id');
    }

    public function users_profile()
    {
        return $this->hasOne('App\Model\User\UserProfile', 'user_id');
    }

    public function enquries() 
    {
        return $this->belongsToMany('App\Enquiry', 'enquiry_user', 'user_id', 'enquiry_id');
    }

     public function proposals()
    {
        return $this->hasMany('App\Proposal', 'traders_id');
    }

    public function users()
    {
    	return $this->belongsTo('App\User');
    }


}

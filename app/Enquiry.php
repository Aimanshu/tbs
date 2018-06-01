<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'jsondata', 'assigned', 'location','isQuestioned'
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function traders() 
    {
        return $this->belongsToMany('App\User', 'enquiry_user', 'enquiry_id', 'user_id');
    }

    public function proposals()
    {
        return $this->hasMany('App\Proposal', 'enquiry_id');
    }


}

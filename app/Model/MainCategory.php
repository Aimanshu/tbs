<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    protected $fillable = [
        'name', 'description', 'image','slug', 'status'
    ];

    public function categories() 
    {
        return $this->belongsToMany('App\Model\Category', 'main_category_category', 'main_category_id', 'category_id')->withTimestamps();
    }

    public function adminmaincategory()
    {
        return $this->hasOne('App\CategoryAdmin', 'main_category_id');
    }

}

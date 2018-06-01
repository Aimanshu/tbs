<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'image','description', 'slug','status','main_category_id'
    ];

    
    public function admincategory()
    {
        return $this->hasOne('App\CategoryAdmin', 'category_id');
    }

    public function adminmaincategory()
    {
        return $this->hasOne('App\CategoryAdmin', 'category_id');
    }

    //This Is For Get All Question accoding Category
    public function questions()
    {
        return $this->hasMany('App\Model\Question', 'category_id');
    }

    public function main_category() 
    {
        return $this->belongsTo('App\Model\MainCategory', 'main_category_id');
    }

    public function main_categories() 
    {
        return $this->belongsToMany('App\Model\MainCategory', 'main_category_category', 'category_id', 'main_category_id')->withTimestamps();
    }

}

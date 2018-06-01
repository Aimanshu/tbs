<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryAdmin extends Model
{
    protected $fillable = [
        'main_category_id','category_id', 'admin_id'
    ];

    public function admin()
    {
        return $this->belongsTo('App\User', 'admin_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category', 'category_id');
    }

    public function maincategory()
    {
        return $this->belongsTo('App\Model\MainCategory', 'main_category_id');
    }
}

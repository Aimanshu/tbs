<?php

namespace App\Model\VideoCourse;

use Illuminate\Database\Eloquent\Model;
use App\Model\VideoCourse\V_Sub_Category;
use App\Model\VideoCourse\V_Sub_Topic;
use App\Model\VideoCourse\V_Category;
use App\Model\VideoCourse\V_Topic;

class VPackages extends Model
{
       protected $fillable = [
        'id','title','slug','short_description', 'long_description', 'price', 'discount','discount_type', 'v_category_id', 'v_sub_category_id','v_Topic_id','v_sub_Topic_id','package_type','full_course','isunlimited','no_of_days','status'
    ];

    public function vSubTopic() {
        return $this->belongsTo(V_Sub_Topic::class, 'v_sub_Topic_id');
    }

    public function vSubCategory() {
        return $this->belongsTo(V_Sub_Category::class, 'v_sub_category_id');
    }

     public function vCategory() {
        return $this->belongsTo(V_Category::class, 'v_category_id');
    }

     public function vTopic() {
        return $this->belongsTo(V_Topic::class, 'v_Topic_id');
    }

}

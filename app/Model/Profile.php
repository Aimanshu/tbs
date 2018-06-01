<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'isOwner', 'business_name', 'business_email', 'business_cont_no', 'website', 'location', 'occupation', 'full_address', 'types_of_business', 'prod_or_serv_offe'
    ];
}

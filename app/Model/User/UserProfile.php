<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id', 'location', 'occupation'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'enquiry_id', 'traders_id', 'file_type', 'description', 'files'
    ];
    
    
    public function enquiry()
    {
        return $this->belongsTo('App\Enquiry', 'enquiry_id');
    }

     public function trader()
    {
        return $this->belongsTo('App\User', 'traders_id');
    }


    



}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    public $timestamps = false;

    public function phones(){
        return $this->hasMany('App\Phone', 'contact_id', 'id');
    }

    public function webSites(){
        return $this->hasMany('App\Website', 'contact_id', 'id');
    }
}

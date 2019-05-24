<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';

    public $timestamps = false;

    public function contact(){
        return $this -> hasOne('App\Contact', 'contact_id', 'id');
    }
}

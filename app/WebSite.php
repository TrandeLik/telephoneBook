<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebSite extends Model
{
    protected $table = 'webSites';

    public $timestamps = false;

    public function contact(){
        return $this -> hasOne('App\Contact', 'contact_id', 'id');
    }
}

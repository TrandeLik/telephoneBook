<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\WebSite;

class webSiteController extends Controller{

    public function addForm($contact_id){
        $contact = Contact::findOrFail($contact_id);
        return view('addWebSite', compact('contact'));
    }

    public function add($contact_id, Request $request){
        $request->validate([
            'webSite' => 'required',
            'contact_id'=> 'exists: contacts, id'
        ]);

        $site = new WebSite();
        $site -> webSite = $request -> webSite;
        $site -> contact_id = $contact_id;
        $site -> save();

        return redirect('/contact/' . $contact_id);
    }

    public function delete($id){
        $site = WebSite::findOrFail($id);
        $site -> delete();

        return redirect('/contact/' . $site -> contact_id);
    }
}

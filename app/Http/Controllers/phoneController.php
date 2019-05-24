<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Phone;

class phoneController extends Controller
{
    public function addForm($contact_id){
        $contact = Contact::findOrFail($contact_id);
        return view('addPhone', compact('contact'));
    }

    public function add($contact_id, Request $request){
        $request->validate([
            'phone' => 'required',
            'contact_id'=> 'exists: contacts, id'
        ]);
        $phone = new Phone();
        $phone -> phone = $request -> phone;
        $phone -> contact_id = $contact_id;
        $phone->save();

        return redirect('/contact/' . $contact_id);
    }

    public function delete($id){
        $phone = Phone::findOrFail($id);
        $phone -> delete();

        return redirect('/contact/' . $phone -> contact_id);
    }
}

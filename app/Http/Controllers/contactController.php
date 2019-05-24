<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class contactController extends Controller
{
    public function main(){
        $allContacts = Contact::all();
        return view('main', compact('allContacts'));
    }

    public function aboutContact($id){
        $thisContact = Contact::findOrFail($id);
        return view('about', compact('thisContact'));
    }

    public function hangingOutAddForm(){
        return view('addForm');
    }

    public function addContact(Request $request){
        $request->validate([
            'profileName' => 'required',
            'email' => 'email',
        ]);
        $contact = new Contact();
        $contact -> profileName = $request -> profileName;
        $contact -> job = $request -> job;
        $contact -> email = $request ->email;
        $contact -> description = $request -> description;
        $contact -> save();

        return redirect('/');
    }

    public function hangingOutEditForm($id){
        $contact = Contact::findOrFail($id);
        return view('edit', compact('contact'));
    }

    public function editContact($id, Request $request){
        $contact = Contact::findOrFail($id);
        $request->validate([
            'profileName' => 'required',
            'email' => 'email',
        ]);

        $contact -> profileName = $request -> profileName;
        $contact-> job = $request -> job;
        $contact -> email = $request -> email;
        $contact -> description = $request -> description;
        $contact -> save();

        return redirect('/contact/'.$id.'');
    }

    public function deleteContact($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect('/');
    }
}

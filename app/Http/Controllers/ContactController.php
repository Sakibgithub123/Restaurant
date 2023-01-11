<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public  function adminContact(){
       $contact= Contact::latest()->get();
        return view('admin.contact.contact',['contacts'=>$contact]);
    }
    public function dltContact(Request $request){
        Contact::dltContact($request);
        return back();
    }


}

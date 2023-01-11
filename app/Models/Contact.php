<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    private static $contact,$contactSave;
    public static function saveContact($request){
        self::$contact=new  Contact();
        self::$contact->name=$request->name;
        self::$contact->email=$request->email;
        self::$contact->subject=$request->subject;
        self::$contact->message=$request->message;

       self::$contactSave= self::$contact->save();
       if(self::$contactSave){
           return back()->with('success','Your message has been sent. Thank you!');
       }else{
           return back()->with('fail','Your message has not been sent. Thank you!');
       }
    }

    public function dltContact($request){
        self::$contact=Contact::find($request->contact_id)->delete();
    }
}

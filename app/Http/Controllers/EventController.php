<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
   public function addEvent(){
       $event=Event::all();
       return view('admin.event.event',['events'=>$event]);
   }
   public function saveEvent(Request $request){
       Event::saveEvent($request);
       return back();
   }
   public function dltEvent(Request $request){
       Event::dltEvent($request);
       return back();
   }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    private static $event,$image,$imageName,$directory,$imageUrl;
    public static function saveEvent($request){
        self::$event=new Event();
        self::$event->event_name=$request->event_name;
        self::$event->event_price=$request->event_price;
        self::$event->image=self::saveImage($request);
        self::$event->event_description=$request->event_description;
        self::$event->status=$request->status;
        self::$event->save();
    }

    public static function saveImage($request){
       self:: $image=$request->file('image');
       self::$imageName=rand().'.'.self::$image->getClientOriginalExtension();
       self::$directory='upload/event-img/';
       self::$imageUrl=self::$directory.self::$imageName;
       self::$image->move(self::$directory,self::$imageName);
       return self::$imageUrl;
    }
    public static function dltEvent($request){
        self::$event=Event::find($request->event_id);
        if($request->image){
            if(self::$event->image){
                if(file_exists(self::$event->image)){
                    unlink(self::$event->image);
                }
            }
        }
        self::$event->delete();
}
}

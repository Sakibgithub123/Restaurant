<?php

namespace App\Models;

use App\Notifications\BookingSmsNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Messages\VonageMessage;
use Illuminate\Notifications\Notification;
use App\Notifications\BookingEmailNotification;

class TableBook extends Model
{
    use HasFactory;
    use Notifiable;
    private static  $tableBook,$saveTable;
    public static function saveBookTable($request){
        self::$tableBook=new TableBook();
        self::$tableBook->name=$request->name;
        self::$tableBook->email=$request->email;
        self::$tableBook->phone=$request->phone;
        self::$tableBook->date=$request->date;
        self::$tableBook->time=$request->time;
        self::$tableBook->people=$request->people;
        self::$tableBook->message=$request->message;

        self::$saveTable=self::$tableBook->save();
        if(self::$saveTable){
            return back()->with('success','Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!');
        }else{
            return back()->with('fail','Something Wrong!');
        }
    }
    public  static function dltBooking($request){
       self::$tbooking=TableBook::find($request->book_id)->delete();
    }


    private static $booking;
    public static function Status($id){
        self::$booking=TableBook::find($id);


        if(self::$booking->status==0){
            self::$booking->status=1;
            self::$booking->notify(new BookingEmailNotification());
//            self::$booking->notify(new BookingSmsNotification(self::$booking->phone));

        }else{
            self::$booking->status=0;
        }
        self::$booking->save();
    }
//    public function routeNotificationForVonage($notification)
//    {
//        return $this->phone;
//    }





}

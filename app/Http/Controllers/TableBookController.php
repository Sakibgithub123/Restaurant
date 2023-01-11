<?php

namespace App\Http\Controllers;

use App\Models\TableBook;
use Illuminate\Http\Request;
use App\Notifications\BookingSmsNotification;

class TableBookController extends Controller
{
    public function adminbooktable(){
        $book=TableBook::latest()->get();
        return view('admin.table-book.table-book',['books'=>$book]);
    }
    public function dltBooking(Request $request){
        TableBook::dltBooking($request);
        return back();
    }
    public function Status($id){
        $table=TableBook::Status($id);
//        $table->notify(new BookingSmsNotification($table));
        return back();
    }

}

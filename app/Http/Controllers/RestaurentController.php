<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Food;
use App\Models\Cheif;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\TableBook;
use DB;

class RestaurentController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function About(){
        return view('frontEnd.about.about');
    }
    public function book_table(){
        return view('frontEnd.bookTable.bookTable');
    }
    public function saveBookTable(Request $request){
        TableBook::saveBookTable($request);
        return back();
    }

    public function Event(){
        $event=Event::all();
        return view('frontEnd.event.event',['events'=>$event]);
    }
    public function Gallery(){
        $gallery=Gallery::all();
        $cheif=Cheif::all();
        return view('frontEnd.gallery.gallery',['galleries'=>$gallery,'cheifs'=>$cheif]);
    }
    public function Menu(){


        $all=DB::table('menus')
            ->join('categories','menus.category_id','categories.id')
            ->join('food','menus.food_id','food.id')
            ->select('menus.*','categories.food_category','food.food_name')
            ->get();

        return view('frontEnd.menu.menu',['alls'=>$all]);
    }
    public function Menu_2($id){


        $menuCategory=DB::table('menus')
            ->join('categories','menus.category_id','categories.id')
            ->join('food','menus.food_id','food.id')
            ->select('menus.*','categories.food_category','food.food_name')
            ->where('menus.category_id',$id)
            ->get();

        return view('frontEnd.menu.menu2',['foodsId'=>$menuCategory]);
    }
    public function Special(){
        $special=DB::table('menus')
            ->join('categories','menus.category_id','categories.id')
            ->join('food','menus.food_id','food.id')
            ->select('menus.*','categories.food_category','food.food_name')
            ->where('categories.food_category','Speciality')
            ->get();

//        $food= $special->food_id;
//
//        $spec=DB::table('menus')
//            ->join('categories','menus.category_id','categories.id')
//            ->join('food','menus.food_id','food.id')
//            ->select('menus.*','categories.food_category','food.food_name')
//            ->where('food_id',$food)
//            ->first();



        return view('frontEnd.special.special',['specials'=>$special,]);
    }
    public function allMenu(){

        $all=DB::table('menus')
            ->join('categories','menus.category_id','categories.id')
            ->join('food','menus.food_id','food.id')
            ->select('menus.*','categories.food_category','food.food_name')
            ->get();


        return view('frontEnd.menu.all-menu',['alls'=>$all]);
    }
    public function Special_2($foodName){
        $special=DB::table('menus')
            ->join('categories','menus.category_id','categories.id')
            ->join('food','menus.food_id','food.id')
            ->select('menus.*','categories.food_category','food.food_name')
            ->where('food.food_name','$foodName')
            ->get();

        return view('frontEnd.special.special2',['specials'=>$special]);


    }
    public function Contact(){
        return view('frontEnd.contact.contact');
    }
    public  function saveContact(Request $request){
        Contact::saveContact($request);
        return back();


    }
}

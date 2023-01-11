<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    private  static $menu,$image,$imageName,$directory,$imageUrl;
    public static function saveMenu($request){

        self::$menu=new Menu();
        self::$menu->category_id=$request->category_id;
        self::$menu->food_id=$request->food_id;
        self::$menu->title=$request->title;
        self::$menu->slug=self::saveSlug($request);
        self::$menu->price=$request->price;
        self::$menu->image=self::saveImage($request);
        self::$menu->description=$request->description;
        self::$menu->food_type=$request->food_type;
        self::$menu->status=$request->status;

        self::$menu->save();

    }
    private static function saveImage($request){
        self::$image=$request->file('image');
        self::$imageName=rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory='upload/image/';
        self::$imageUrl=self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
    private static function saveSlug($request){
        if($request->slug){
            $str=$request->slug;
            return preg_replace('/\s+/u','-',trim($str));
        }
        $str=$request->title;
        return preg_replace('/\s+/u','-',trim($str));
    }
}

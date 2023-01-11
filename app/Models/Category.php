<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private  static $category;
    public static function SaveCategory($request){
        self::$category=new Category();
        self::$category->food_category=$request->food_category;
        self::$category->status=$request->status;
        self::$category->save();
    }
}

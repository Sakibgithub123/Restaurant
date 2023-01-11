<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    private  static $food;
    public static function SaveFood($request){
        self::$food=new Food();
        self::$food->food_name=$request->food_name;
        self::$food->status=$request->status;
        self::$food->save();
    }
}

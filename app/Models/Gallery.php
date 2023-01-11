<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    private static $gallery,$image,$imageName,$directory,$imageUrl;
    public static function saveGallery($request){
        self::$gallery=new Gallery();
        self::$gallery->gallery_image=self::saveImage($request);
        self::$gallery->status=$request->status;
        self::$gallery->save();
    }
    public static function saveImage($request){
        self::$image=$request->file('gallery_image');
        self::$imageName=rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory='upload/gallery-img/';
        self::$imageUrl=self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);

        return self::$imageUrl;
    }
}

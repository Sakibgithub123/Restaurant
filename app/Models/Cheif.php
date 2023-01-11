<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Finder\searchInDirectory;

class Cheif extends Model
{
    use HasFactory;
    private static $cheif,$image,$imageName,$directory,$imageUrl;
    public static function saveCheif($request){
        self::$cheif=new Cheif();
        self::$cheif->cheifs_name=$request->cheifs_name;
        self::$cheif->cheifs_designation=$request->cheifs_designation;
        self::$cheif->image=self::saveImage($request);
        self::$cheif->twitter=$request->twitter;
        self::$cheif->fb=$request->fb;
        self::$cheif->insta=$request->insta;
        self::$cheif->status=$request->status;
        self::$cheif->save();

}
  public static function saveImage($request){
        self::$image=$request->file('image');
        self::$imageName=rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory='upload/cheif-image/';
        self::$imageUrl=self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);

        return self::$imageUrl;
  }


}

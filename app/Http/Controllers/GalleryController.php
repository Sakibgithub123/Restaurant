<?php

namespace App\Http\Controllers;

use App\Models\Cheif;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function addGallery(){
        $cheif=Cheif::all();
        $gallery=Gallery::all();
        return view('admin.gallery.gallery',[
            'cheifs'=>$cheif,
            'galleries'=>$gallery
        ]);
    }
    public function saveCheif(Request $request){
        Cheif::saveCheif($request);
        return back();

    }
    public function saveGallery(Request $request){
        Gallery::saveGallery($request);
        return back();
    }
}

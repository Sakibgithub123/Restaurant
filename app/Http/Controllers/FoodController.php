<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Food;
use App\Models\Menu;
use Illuminate\Http\Request;
use DB;

class FoodController extends Controller
{
  public function FoodCategory(){
      $category=Category::all();
      return view('admin.food.category',['categories'=>$category]);
  }
    public function FoodName(){
      $food=Food::all();
        return view('admin.food.foodname',['foods'=>$food]);
    }
    public  function DeleteFoodCategory(Request $request){
      $DltCategory=Category::find($request->dlt_category)->delete();
      return back();
    }
    public  function DeleteFood(Request $request){
      $DltFood=Food::find($request->dlt_food)->delete();
      return back();
    }
    public function AddFoodCategory(Request $request){
      Category::SaveCategory($request);
      return back();
    }
    public function AddFoodName(Request $request){
        Food::SaveFood($request);
        return back();
    }
    public function FoodMenu(){
      return view('admin.food.foodmenu',[
          'categories'=>Category::all(),
          'foods'=>Food::all()]);
    }
    public function AddFoodMenu(Request $request){
      Menu::saveMenu($request);
      return back();
    }
    public function manageMenu(){
     $menu=DB::table('menus')
         ->join('categories','menus.category_id','categories.id')
     ->join('food','menus.food_id','food.id')
         ->select('menus.*','categories.food_category','food.food_name')
         ->get();
      return view('admin.manage-menu.manage-menu',['menus'=>$menu]);
    }

    public function Status($id){
      $menu=Menu::find($id);
      if($menu->status==1){
          $menu->status=2;
      }else{
          $menu->status=1;
      }
      $menu->save();
      return back();
    }
    public function deleteMenu(Request $request){
      $menu=Menu::find($request->menu_id)->delete();
      return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;


  //Take the control of the Warehouse
class WarehouseController extends Controller
{

  public function index(){

      return view('index');
  }




    public function editCategory(){
        $id = $_REQUEST['id'];
        $Category = DB::table('categories')
        ->select('id','categoryName', 'numberCat')
        ->where('id', $id)
        ->get();
        return view('Catalogue/editCategory', compact('Category'));
    }

}

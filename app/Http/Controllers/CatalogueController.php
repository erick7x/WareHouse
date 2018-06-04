<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;

class CatalogueController extends Controller
{

      public function addCategory(){


        return view('Catalogue/addCategory');
      }

      public function storeCategory(){


        $data = Request()->validate([
          'categoryName' => ['required' , 'unique:categories,categoryName'],
          'numberCat' => ['required' , 'unique:categories,numberCat']

        ]);

        DB::table('categories')->insert([
          'id' => null,
          'categoryName' => $data['categoryName'],
          'numberCat' => $data['numberCat'],
          ]);



        $success="Categoria agregada correctamente";
        return view('Catalogue/addCategory', compact('success'));
      }

      public function showCategories(){

        $categories = DB::table('categories')->select('id','categoryName', 'numberCat')->get();
        return view('Catalogue/showCategories', compact('categories'));
      }

      public function editCategory(){
          $id = $_REQUEST['id'];
          $Category = DB::table('categories')
          ->select('id','categoryName', 'numberCat')
          ->where('id', '=', $id)
          ->get()
          ->first();

          return view('Catalogue/editCategory', compact('Category'));
      }

      public function updateCategory(){

        $id = $_REQUEST['id'];
        $categoryName = $_REQUEST['categoryName'];
        $numberCat = $_REQUEST['numberCat'];


        if (strlen($id)!=0 && strlen($categoryName)!=0 && strlen($numberCat)!=0) {
          try {
            DB::table('categories')
                  ->where('id', $id)
                  ->update(['categoryName' => $categoryName, 'numberCat' => $numberCat]);
          } catch (\Exception $e) {


            $Category = DB::table('categories')
            ->select('id','categoryName', 'numberCat')
            ->where('id', '=', $id)
            ->get()
            ->first();
            $error="Ya existe la categoria ingresada";
            return view('Catalogue/editCategory', compact('Category', 'error'));

          }



          $categories = DB::table('categories')->select('id','categoryName', 'numberCat')->get();
          $success="Categoria actualizada correctamente";
          return view('Catalogue/showCategories', compact('categories', 'success'));
        }else {

          $Category = DB::table('categories')
          ->select('id','categoryName', 'numberCat')
          ->where('id', '=', $id)
          ->get()
          ->first();
          $error="Debe llenar todos los campos";
          return view('Catalogue/editCategory', compact('Category', 'error'));
        }


      }


      public function deleteCategory()
      {
        $id = $_REQUEST['id'];
        DB::table('categories')->where('id', '=', $id)->delete(); 


        $categories = DB::table('categories')->select('id','categoryName', 'numberCat')->get();
        return view('Catalogue/showCategories', compact('categories'));
      }

}

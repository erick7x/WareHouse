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


        $categoryName = $_REQUEST['categoryName'];
        $numberCat = $_REQUEST['numberCat'];


        if (strlen($categoryName)!=0 && strlen($numberCat)!=0) {
          try {

            DB::table('categories')->insert([
              'id' => null,
              'categoryName' => $categoryName,
              'numberCat' => $numberCat
              ]);

              $success="Categoria agregada correctamente";
              return view('Catalogue/addCategory', compact('success'));

          } catch (\Exception $e) {

            $categories = DB::table('categories')->select('id','categoryName', 'numberCat')->get();
            $error="Ya existe la categoria ingresada";
            return view('Catalogue/addCategory', compact('categories', 'error'));

          }

      }else {
        $error="Debe llenar todos los campos";
        return view('Catalogue/addCategory', compact('error'));
      }




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



      public function addSubCategory(){

        $categories = DB::table('categories')->select('id','categoryName', 'numberCat')->get();
        return view('Catalogue/addSubCategory', compact('categories'));
      }


      public function storeSubCategory(){


        $categories = DB::table('categories')->select('id','categoryName', 'numberCat')->get();

     if (strlen($_REQUEST['subCategoryName'])!=0 && strlen($_REQUEST['startNumberSubCat'])!=0) {

        DB::table('subcategories')->insert([
          'id' => null,
          'idCategory' => $_REQUEST['idCategory'],
          'subCategoryName' => $_REQUEST['subCategoryName'],
          'startNumberSubCat' => $_REQUEST['startNumberSubCat']
          ]);

        $success="Sub categoria agregada correctamente";

        return view('Catalogue/addSubCategory', compact('success','categories'));

    }else {
      $error="Debe llenar todos los campos";
      return view('Catalogue/addSubCategory', compact('error','categories'));
    }

  }

  public function showSubCategories(){

    $subCategories = DB::table('subcategories')->select('id','idCategory', 'subCategoryName', 'startNumberSubCat')->get();
    return view('Catalogue/showSubCategories', compact('subCategories'));
  }


  public function editSubCategory(){
      $id = $_REQUEST['id'];
      $subCategory = DB::table('subcategories')
      ->select('id','subCategoryName', 'startNumberSubCat')
      ->where('id', '=', $id)
      ->get()
      ->first();

      return view('Catalogue/editSubCategory', compact('subCategory'));
  }


  public function updateSubCategory(){

    $id = $_REQUEST['id'];
    $subCategoryName = $_REQUEST['subCategoryName'];
    $startNumberSubCat = $_REQUEST['startNumberSubCat'];


    if (strlen($id)!=0 && strlen($subCategoryName)!=0 && strlen($startNumberSubCat)!=0) {
      try {
        DB::table('subcategories')
              ->where('id', $id)
              ->update(['subCategoryName' => $subCategoryName, 'startNumberSubCat' => $startNumberSubCat]);
      } catch (\Exception $e) {


        $subCategory = DB::table('subcategories')
        ->select('id','subCategoryName', 'startNumberSubCat')
        ->where('id', '=', $id)
        ->get()
        ->first();
        $error="Ha ocurrido un error, favor de intentar nuevamente";
        return view('Catalogue/editCategory', compact('subCategory', 'error'));

      }



      $subCategories = DB::table('subcategories')->select('id','subCategoryName', 'startNumberSubCat')->get();
      $success="Sub categoria actualizada correctamente";
      return view('Catalogue/showSubCategories', compact('subCategories', 'success'));
    }else {

      $subCategory = DB::table('subcategories')
      ->select('id','subCategoryName', 'startNumberSubCat')
      ->where('id', '=', $id)
      ->get()
      ->first();
      $error="Debe llenar todos los campos";
      return view('Catalogue/editSubCategory', compact('subCategory', 'error'));
    }


  }


  public function deletesubCategory()
  {
    $id = $_REQUEST['id'];
    DB::table('subcategories')->where('id', '=', $id)->delete();


    $subCategories = DB::table('subcategories')->select('id','idCategory', 'subCategoryName', 'startNumberSubCat')->get();
    return view('Catalogue/showSubCategories', compact('subCategories'));
  }



  public function addDescription(){

    $subcategories = DB::table('subcategories')->select('id','subCategoryName', 'startNumberSubCat')->get();
    return view('Catalogue/addDescription', compact('subcategories'));
  }


  public function storeDescription(){



  if (strlen($_REQUEST['descriptionExpense'])!=0 && strlen($_REQUEST['numberId'])!=0) {

    DB::table('descriptionExpenses')->insert([
      'id' => null,
      'idSubCategory' => $_REQUEST['idSubCategory'],
      'description' => $_REQUEST['descriptionExpense'],
      'numberId' => $_REQUEST['numberId']
      ]);



    $subcategories = DB::table('subcategories')->select('id','idCategory', 'subCategoryName', 'startNumberSubCat')->get();
    $success="Descripción agregada correctamente";
    return view('Catalogue/addDescription', compact('subcategories','success'));

  }else {

    $subcategories = DB::table('subcategories')->select('id','idCategory', 'subCategoryName', 'startNumberSubCat')->get();
    $error="Debe llenar todos los campos";
    return view('Catalogue/addDescription', compact('subcategories','error'));
  }

  }

  public function showDescriptions(){

    $descriptions = DB::table('descriptionExpenses')->select('id','idSubCategory', 'description', 'numberId')->get();
    return view('Catalogue/showDescriptions', compact('descriptions'));
  }

  public function editDescription(){

    $id = $_REQUEST['id'];
    $description = DB::table('descriptionExpenses')
    ->select('id','idSubCategory', 'numberId', 'description')
    ->where('id', '=', $id)
    ->get()
    ->first();
    $subCategories = DB::table('subcategories')->select('id','idCategory', 'subCategoryName', 'startNumberSubCat')->get();

    return view('Catalogue/editDescription', compact('subCategories' ,'description'));
  }



  public function updateDescription(){

    $id = $_REQUEST['id'];
    $description = $_REQUEST['description'];
    $numberId = $_REQUEST['numberId'];

    $subCategories = DB::table('subcategories')->select('id','idCategory', 'subCategoryName', 'startNumberSubCat')->get();

    if (strlen($id)!=0 && strlen($description)!=0 && strlen($numberId)!=0) {
      try {
        DB::table('descriptionExpenses')
              ->where('id', $id)
              ->update(['description' => $description, 'numberId' => $numberId]);


              $descriptions = DB::table('descriptionExpenses')->select('id','idSubCategory', 'description', 'numberId')->get();
              $success="Se ha actualizado correctamente";

              return view('Catalogue/showDescriptions', compact('descriptions', 'success'));

      } catch (\Exception $e) {


        $description = DB::table('descriptionExpenses')
        ->select('id','idSubCategory', 'description', 'numberId')
        ->where('id', '=', $id)
        ->get()
        ->first();
        $error="Ha ocurrido un error, favor de intentar nuevamente";
        return view('Catalogue/editDescription', compact('subCategories', 'description', 'error'));

      }



      $description = DB::table('descriptionExpenses')
      ->select('id','idSubCategory', 'description', 'numberId')
      ->where('id', '=', $id)
      ->get()
      ->first();
      $success="Descripción agregada correctamente";
      return view('Catalogue/editDescription', compact('subCategories', 'description', 'success'));

    }else {

      $description = DB::table('descriptionExpenses')
      ->select('id','idSubCategory', 'description', 'numberId')
      ->where('id', '=', $id)
      ->get()
      ->first();
      $error="Debe llenar todos los campos";
      return view('Catalogue/editDescription', compact('subCategories', 'description', 'error'));
    }


  }




  public function deleteDescription()
  {
    $id = $_REQUEST['id'];
    DB::table('descriptionExpenses')->where('id', '=', $id)->delete();

    $descriptions = DB::table('descriptionExpenses')->select('id','idSubCategory', 'description', 'numberId')->get();

    $success="Se ha eliminado correctamente";

    return view('Catalogue/showDescriptions', compact('descriptions', 'success'));
  }


}

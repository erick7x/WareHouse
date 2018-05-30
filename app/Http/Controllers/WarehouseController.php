<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

  //Take the control of the Warehouse
class WarehouseController extends Controller
{

  public function index(){

      return view('index');
  }
  public function addItem(){

      return view('addItem');
  }

    public function store(){
      $data = Request()->validate([
        'itemName' => ['required' , 'unique:items,itemName'],
        'quantity' => 'required',
        'unity' => 'required',
        'price' => 'required'
      ],[
        'itemName.required' => 'El campo Nombre del artículo es obligatorio',
        'quantity.required' => 'El campo Cantidad es obligatorio',
        'unity.required' => 'El campo Unidad es obligatorio',
        'price.required' => 'El campo Precio es obligatorio',
        'itemName.unique' => 'El Nombre del artículo ingresado ya existe'
      ]);

      Item::create([
        'id' => null,
        'itemName' => $data['itemName'],
        'quantity' => $data['quantity'],
        'unity' => $data['unity'],
        'price' => $data['price'],
      ]);

      return view('addItem');

    }

    public function updateItem(){
                  $id=$_REQUEST['id'];
                  $item = Item::find($id);
                  $item->itemName = $_REQUEST['itemName'];
                  $item->quantity = $_REQUEST['quantity'];
                  $item->unity = $_REQUEST['unity'];
                  $item->price = $_REQUEST['price'];
                  $item->save();


      $items = Item::all();
      $updateSuccess="Producto actualizado correctamente";
      return view('showItems', compact('items','updateSuccess'));

    }

    public function showItems(){

      $items = Item::all();
      return view('showItems', compact('items'));
    }

    public function editItem(){
      $id = $_REQUEST['id'];
      $item= Item::find($id);
      
      return view('editItem', compact('item'));
    }

    public function deleteItem(){
      $id = $_REQUEST['id'];

      Item::find($id)->delete();




      $items = Item::all();
      return view('showItems', compact('items'));

    }

}

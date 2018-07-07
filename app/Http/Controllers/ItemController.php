<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ItemController extends Controller
{
  public function addItem(){

      return view('Items/addItem');
  }

    public function store(){
      $data = Request()->validate([
        'idDescription' => 'required',
        'itemName' => ['required' , 'unique:items,itemName'],
        'quantity' => 'required',
        'unity' => 'required',
        'price' => 'required'
      ]);

      Item::create([
        'id' => null,
        'idDescription' => $data['idDescription'],
        'itemName' => $data['itemName'],
        'quantity' => $data['quantity'],
        'unity' => $data['unity'],
        'price' => $data['price'],
      ]);
      $success="Artículo agregado correctamente";
      return view('Items/addItem', compact('success'));

    }

    public function updateItem(){


      if (strlen($_REQUEST['description'])!=0 && strlen($_REQUEST['itemName'])!=0 && strlen($_REQUEST['quantity'])!=0 && strlen($_REQUEST['unity'])!=0 && strlen($_REQUEST['price'])!=0) {

        $id=$_REQUEST['id'];
        $item = Item::find($id);
        $item->description = $_REQUEST['description'];
        $item->itemName = $_REQUEST['itemName'];
        $item->quantity = $_REQUEST['quantity'];
        $item->unity = $_REQUEST['unity'];
        $item->price = $_REQUEST['price'];
        $item->save();

        $items = Item::all();
        $updateSuccess="Producto actualizado correctamente";
        return view('Items/showItems', compact('items','updateSuccess'));

      }else {
        $id = $_REQUEST['id'];
        $item= Item::find($id);

        $error="Debe llenar todos los campos";
        return view('Items/editItem', compact('item','error'));
      }


    }

    public function showItems(){

      $items = Item::all();
      return view('Items/showItems', compact('items'));
    }

    public function editItem(){
      $id = $_REQUEST['id'];
      $item= Item::find($id);

      return view('Items/editItem', compact('item'));
    }

    public function deleteItem(){
      $id = $_REQUEST['id'];

      Item::find($id)->delete();




      $items = Item::all();
      return view('Items/showItems', compact('items'));

    }
}

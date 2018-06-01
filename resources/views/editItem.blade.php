@extends('layout')

@section('content')

  @if (!empty($error))
    <h3>Debe llenar todos los campos</h3>
  @endif

  <form action="updateItem" method="post" >
    {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $item->id }}">
      <label>Nombre del artículo:</label><br>
      <input name="itemName" type="text" value="{{ $item->itemName }}" /><br/>
      <label>Cantidad:</label><br>
      <input name="quantity" type="number" value="{{ $item->quantity }}"/><br/>
      <label>Unidad:</label><br>
      <input name="unity" type="text" value="{{ $item->unity }}" /><br/>
      <label>Precio:</label><br>
      <input name="price" type="number" value="{{ $item->price }}" /><br/>
      <input type="submit" />
  </form>


@endsection

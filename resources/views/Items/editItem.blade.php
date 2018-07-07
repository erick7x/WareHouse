@extends('layout')

@section('content')

  @if (!empty($error))
    <h3>Debe llenar todos los campos</h3>
  @endif
<div class="container">
  <form action="updateItem" method="post" >
    {{ csrf_field() }}
    <div "form-group">
      <label>Id descripción del artículo:</label><br>
      <input class="form-control" name="description" type="text" value="{{ $item->description }}" /><br/>
      <input class="form-control" type="hidden" name="id" value="{{ $item->id }}">
      <label>Nombre del artículo:</label><br>
      <input class="form-control" name="itemName" type="text" value="{{ $item->itemName }}" /><br/>
      <label>Cantidad:</label><br>
      <input class="form-control" name="quantity" type="number" value="{{ $item->quantity }}"/><br/>
      <label>Unidad:</label><br>
      <input class="form-control" name="unity" type="text" value="{{ $item->unity }}" /><br/>
      <label>Precio:</label><br>
      <input class="form-control" name="price" type="number" value="{{ $item->price }}" /><br/>
      <a href="showItems"> <input class="btn btn-danger" type="button" value="Cancelar"> </a>
      <input class="btn btn-success" type="submit" />
    </div>
  </form>
</div>


@endsection

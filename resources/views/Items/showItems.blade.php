@extends('layout')



@section('content')
@if (!empty($updateSuccess))
  {{ $updateSuccess }}

@endif

  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>Nombre del artículo:</th>
        <th>Cantidad:</th>
        <th>Unidad:</th>
        <th>Precio:</th>
        <th></th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($items as $item)
        <tr>
          <td scope="col">{{ $item->itemName }}</td>
          <td scope="col">{{ $item->quantity }}</td>
          <td scope="col">{{ $item->unity }}</td>
          <td scope="col">{{ $item->price }}</td>
          <td scope="col">
            <form action="editItem" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $item->id }}">
                <button type="submit" class="btn btn-warning"> Editar </button>
            </form>
          </td>
          <td>
            <form action="deleteItem" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $item->id }}">
                <button type="submit" class="btn btn-danger"> Eliminar </button>
            </form>
         </td>
        </tr>
      @endforeach



    </tbody>
  </table>
@endsection

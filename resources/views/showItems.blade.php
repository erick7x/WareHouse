@extends('layout')



@section('content')
@if (!empty($updateSuccess))
  {{ $updateSuccess }}
  
@endif

  <table>
    <thead>
      <th>
        <td>Nombre del artículo:</td>
        <td>Cantidad:</td>
        <td>Unidad:</td>
        <td>Precio:</td>
        <td>Acción</td>

      </th>
    </thead>
    <tbody>

      @foreach ($items as $item)
        <tr>
          <td></td>
          <td>{{ $item->itemName }}</td>
          <td>{{ $item->quantity }}</td>
          <td>{{ $item->unity }}</td>
          <td>{{ $item->price }}</td>
          <td>
            <form action="editItem" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $item->id }}">
                <button type="submit"> Editar </button>
            </form>
          </td>
          <td>
            <form action="deleteItem" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $item->id }}">
                <button type="submit"> Eliminar </button>
            </form>
         </td>
        </tr>
      @endforeach



    </tbody>
  </table>
@endsection

@extends('layout')



@section('content')
@if (!empty($success))
  {{ $success }}

@endif

  <table>
    <thead>
      <th>
        <td>Nombre:</td>
        <td>Número:</td>


      </th>
    </thead>
    <tbody>

      @foreach ($descriptions as $description)
        <tr>
          <td></td>
          <td>{{ $description->description }}</td>
          <td>{{ $description->numberId }}</td>

          <td>
            <form action="editDescription" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $description->id }}">
                <button type="submit"> Editar </button>
            </form>
          </td>
          <td>
            <form action="deleteDescription" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $description->id }}">
                <button type="submit"> Eliminar </button>
            </form>
          </td>

        </tr>
      @endforeach



    </tbody>
  </table>
@endsection

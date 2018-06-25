@extends('layout')



@section('content')
@if (!empty($success))
  {{ $success }}

@endif

  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>Nombre:</th>
        <th>Número:</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>

      @foreach ($descriptions as $description)
        <tr>
          <td scope="col">{{ $description->description }}</td>
          <td scope="col">{{ $description->numberId }}</td>

          <td>
            <form action="editDescription" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $description->id }}">
                <button type="submit" class="btn btn-warning"> Editar </button>
            </form>
          </td>
          <td>
            <form action="deleteDescription" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $description->id }}">
                <button type="submit" class="btn btn-danger"> Eliminar </button>
            </form>
          </td>

        </tr>
      @endforeach



    </tbody>
  </table>
@endsection

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

      @foreach ($categories as $category)
        <tr>
          <td></td>
          <td>{{ $category->categoryName }}</td>
          <td>{{ $category->numberCat }}</td>

          <td>
            <form action="editCategory" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $category->id }}">
                <button type="submit"> Editar </button>
            </form>
          </td>
          <td>
            <form action="deleteCategory" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $category->id }}">
                <button type="submit"> Eliminar </button>
            </form>
          </td>

        </tr>
      @endforeach



    </tbody>
  </table>
@endsection

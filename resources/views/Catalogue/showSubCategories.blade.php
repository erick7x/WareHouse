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

      @foreach ($subCategories as $subCategory)
        <tr>
          <td></td>
          <td>{{ $subCategory->subCategoryName }}</td>
          <td>{{ $subCategory->startNumberSubCat }}</td>

          <td>
            <form action="editSubCategory" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $subCategory->id }}">
                <button type="submit"> Editar </button>
            </form>
          </td>
          <td>
            <form action="deletesubCategory" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $subCategory->id }}">
                <button type="submit"> Eliminar </button>
            </form>
          </td>

        </tr>
      @endforeach



    </tbody>
  </table>
@endsection

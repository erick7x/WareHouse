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

      @foreach ($subCategories as $subCategory)
        <tr>
          <td scope="col">{{ $subCategory->subCategoryName }}</td>
          <td scope="col">{{ $subCategory->startNumberSubCat }}</td>

          <td>
            <form action="editSubCategory" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $subCategory->id }}">
                <button type="submit" class="btn btn-warning"> Editar </button>
            </form>
          </td>
          <td>
            <form action="deletesubCategory" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $subCategory->id }}">
                <button type="submit" class="btn btn-danger"> Eliminar </button>
            </form>
          </td>

        </tr>
      @endforeach



    </tbody>
  </table>
@endsection

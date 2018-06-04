@extends('layout')



@section('content')
@if (!empty($updateSuccess))
  {{ $updateSuccess }}

@endif

  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>Nombre:</th>
        <th>Número:</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
        <tr>
          <td scope="col">{{ $category->categoryName }}</td>
          <td scope="col">{{ $category->numberCat }}</td>
          <td>
            <form action="editCategory" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $category->id }}">
                <button class="btn btn-warning" type="submit"> Editar </button>
            </form>
          </td>

        </tr>
      @endforeach



    </tbody>
  </table>
@endsection

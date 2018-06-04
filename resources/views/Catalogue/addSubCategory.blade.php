@extends('layout')


@section('content')


  @if (!empty($success))
    <h3>{{ $success }}</h3>
  @endif

    @if ($errors->any())

      <h3>Debe llenar todos los campos</h3>

    @endif

  <form method="post" action="storeSubCategory">
    {{ csrf_field() }}
      <label>Nombre de la categoria:</label><br>
      <select class="" name="categoryName">
        @foreach ($categories as $category)
          <option value="{{ $category->categoryName }}">{{ $category->categoryName }}</option>
        @endforeach

      </select><br>
      <label>Nombre de la sub categoria:</label><br>
      <input type="text" name="subCategoryName" value="{{ old('subCategoryName') }}"><br>
      <label>Número:</label><br>
      <input name="numberCat" type="number" value="{{ old('numberCat') }}" /><br/>
      <input type="submit" />
  </form>

@endsection

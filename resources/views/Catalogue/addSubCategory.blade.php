@extends('layout')


@section('content')


  @if (!empty($success))
    <h3>{{ $success }}</h3>
  @endif

  @if (!empty($error))
    <h3>{{ $error }}</h3>
  @endif

  

  <form method="post" action="storeSubCategory">
    {{ csrf_field() }}
      <label>Nombre de la categoria:</label><br>
      <select name="idCategory">
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
        @endforeach

      </select><br>
      <label>Nombre de la sub categoria:</label><br>
      <input type="text" name="subCategoryName" value="{{ old('subCategoryName') }}"><br>
      <label>Número:</label><br>
      <input name="startNumberSubCat" type="number" value="{{ old('startNumberSubCat') }}" /><br/>
      <input type="submit" />
  </form>

@endsection

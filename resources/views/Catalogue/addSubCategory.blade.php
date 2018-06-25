@extends('layout')


@section('content')


  @if (!empty($success))
    <h3>{{ $success }}</h3>
  @endif

  @if (!empty($error))
    <h3>{{ $error }}</h3>
  @endif

  
<div class="container">
  <form method="post" action="storeSubCategory">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Nombre de la categoria:</label><br>
      <select class="form-control" name="idCategory">
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
        @endforeach

      </select><br>
      <label>Nombre de la sub categoria:</label><br>
      <input class="form-control" type="text" name="subCategoryName" value="{{ old('subCategoryName') }}"><br>
      <label>Número:</label><br>
      <input class="form-control" name="startNumberSubCat" type="number" value="{{ old('startNumberSubCat') }}" /><br/>
      <a href="index.php"><input class="btn btn-danger" type="button" value="Cancelar"></a>
      <input class="btn btn-success" type="submit" /> 
    </div>
  </form>
</div>
@endsection

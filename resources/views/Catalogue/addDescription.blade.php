@extends('layout')


@section('content')


  @if (!empty($success))
    <h3>{{ $success }}</h3>
  @endif

  @if (!empty($error))
    <h3>{{ $error }}</h3>
  @endif


<div class="container">
  <form method="post" action="storeDescription">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Nombre de la sub categoria:</label><br>
      <select class="form-control" name="idSubCategory">
        @foreach ($subcategories as $subCategory)
          <option value="{{ $subCategory->id }}">{{ $subCategory->subCategoryName }}</option>
        @endforeach

      </select><br>
      <label>Descripción gasto:</label><br>
      <input class="form-control" type="text" name="descriptionExpense" value="{{ old('descriptionExpense') }}"><br>
      <label>Número:</label><br>
      <input class="form-control" name="numberId" type="number" value="{{ old('numberId') }}" /><br/>
      <a href="index.php"><input class="btn btn-danger" type="button" value="Cancelar"></a>
      <input class="btn btn-success" type="submit" />
    </div>
  </form>
</div>
@endsection

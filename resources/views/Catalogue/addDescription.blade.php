@extends('layout')


@section('content')


  @if (!empty($success))
    <h3>{{ $success }}</h3>
  @endif

  @if (!empty($error))
    <h3>{{ $error }}</h3>
  @endif



  <form method="post" action="storeDescription">
    {{ csrf_field() }}
      <label>Nombre de la sub categoria:</label><br>
      <select name="idSubCategory">
        @foreach ($subcategories as $subCategory)
          <option value="{{ $subCategory->id }}">{{ $subCategory->subCategoryName }}</option>
        @endforeach

      </select><br>
      <label>Descripción gasto:</label><br>
      <input type="text" name="descriptionExpense" value="{{ old('descriptionExpense') }}"><br>
      <label>Número:</label><br>
      <input name="numberId" type="number" value="{{ old('numberId') }}" /><br/>
      <input type="submit" />
  </form>

@endsection

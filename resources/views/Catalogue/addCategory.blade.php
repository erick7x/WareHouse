@extends('layout')


@section('content')


  @if (!empty($success))
    <h3>{{ $success }}</h3>
  @endif

  @if (!empty($error))
    <h3>{{ $error }}</h3>
  @endif

  <form method="post" action="storeCategory">
    {{ csrf_field() }}
      <label>Nombre de la categoria:</label><br>
      <input name="categoryName" type="text" value="{{ old('categoryName') }}" /><br/>
      <label>Número:</label><br>
      <input name="numberCat" type="number" value="{{ old('numberCat') }}" /><br/>
      <input type="submit" />
  </form>

@endsection

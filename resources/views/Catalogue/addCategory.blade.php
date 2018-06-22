@extends('layout')


@section('content')


  @if (!empty($success))
    <h3>{{ $success }}</h3>
  @endif

    @if ($errors->any())

      <h3>Debe llenar todos los campos</h3>

    @endif
<div class="container">
  <form method="post" action="storeCategory">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Nombre de la categoria:</label><br>
      <input class="form-control" name="categoryName" type="text" value="{{ old('categoryName') }}" /><br/>
      <label>Número:</label><br>
      <input class="form-control" name="numberCat" type="number" value="{{ old('numberCat') }}" /><br/>
      <a href="index.php"><input class="btn btn-danger" type="button" value="Cancelar"></a>
      <input class="btn btn-success" type="submit" />
    </div>
  </form>
</div>

@endsection

@extends('layout')

@section('content')

  @if (!empty($error))
    <h3>Debe llenar todos los campos</h3>
  @endif
<div class="container">
  <form action="updateCategory" method="post" >
    {{ csrf_field() }}
    <div class="form-goup">
      <input class="form-control" type="hidden" name="id" value="{{ $Category->id }}">
      <label>Nombre de la categoria:</label><br>
      <input class="form-control" name="categoryName" type="text" value="{{ $Category->categoryName }}" /><br/>
      <label>Número de la categoria:</label><br>
      <input class="form-control" name="numberCat" type="number" value="{{ $Category->numberCat }}"/><br/>
      <a href="showItems"> <input class="btn btn-danger" type="button" value="Cancelar"> </a>
      <input class="btn btn-success" type="submit"/>
    </div>
  </form>
</div>

@endsection

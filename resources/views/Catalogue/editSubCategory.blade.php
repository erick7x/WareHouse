@extends('layout')

@section('content')

  @if (!empty($error))
    {{ $error }}
  @endif
<div class="container">
  <form action="updateSubCategory" method="post" >
    {{ csrf_field() }}
    <div class="form-group">
      <input class="form-control" type="hidden" name="id" value="{{ $subCategory->id }}">
      <label>Nombre de la sub categoria:</label><br>
      <input class="form-control" name="subCategoryName" type="text" value="{{ $subCategory->subCategoryName }}" /><br/>
      <label>Número de la sub categoria:</label><br>
      <input class="form-control" name="startNumberSubCat" type="number" value="{{ $subCategory->startNumberSubCat }}"/><br/>
      <a href="showItems"> <input class="btn btn-danger" type="button" value="Cancelar"> </a>
      <input class="btn btn-success" type="submit"/>
    </div>
  </form>
</div>

@endsection

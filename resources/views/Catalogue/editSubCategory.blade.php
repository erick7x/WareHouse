@extends('layout')

@section('content')

  @if (!empty($error))
    {{ $error }}
  @endif

  <form action="updateSubCategory" method="post" >
    {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $subCategory->id }}">
      <label>Nombre de la sub categoria:</label><br>
      <input name="subCategoryName" type="text" value="{{ $subCategory->subCategoryName }}" /><br/>
      <label>Número de la sub categoria:</label><br>
      <input name="startNumberSubCat" type="number" value="{{ $subCategory->startNumberSubCat }}"/><br/>
      <input type="submit" />
  </form>


@endsection

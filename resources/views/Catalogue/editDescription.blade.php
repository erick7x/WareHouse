@extends('layout')

@section('content')

  @if (!empty($error))
    {{ $error }}
  @endif
<div class="container">
  <form action="updateDescription" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <input class="form-control" type="hidden" name="id" value="{{ $description->id }}">
      <label>subcategoria:</label><br>
      <select class="form-control" name="idCategory">
        @foreach ($subCategories as $subCategory)
          <option value="{{ $subCategory->id }}">{{ $subCategory->subCategoryName }}</option>
        @endforeach

      </select>
      <label>Descripción:</label><br>
      <input class="form-control" name="description" type="text" value="{{ $description->description }}" /><br/>
      <label>Número de la descripción:</label><br>
      <input class="form-control" name="numberId" type="number" value="{{ $description->numberId }}"/><br/>
      <a href="showItems"> <input class="btn btn-danger" type="button" value="Cancelar"> </a>
      <input type="submit" class="btn btn-success"/>
    </div> 
  </form>
</div>

@endsection

@extends('layout')

@section('content')

  @if (!empty($error))
    {{ $error }}
  @endif

  <form action="updateDescription" method="post">
    {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $description->id }}">
        <label>subcategoria:</label><br>
      <select name="idCategory">
        @foreach ($subCategories as $subCategory)
          <option value="{{ $subCategory->id }}">{{ $subCategory->subCategoryName }}</option>
        @endforeach

      </select>
      <label>Descripción:</label><br>
      <input name="description" type="text" value="{{ $description->description }}" /><br/>
      <label>Número de la descripción:</label><br>
      <input name="numberId" type="number" value="{{ $description->numberId }}"/><br/>
      <input type="submit" />
  </form>


@endsection

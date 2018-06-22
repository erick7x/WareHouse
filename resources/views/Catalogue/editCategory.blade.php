@extends('layout')

@section('content')

  @if (!empty($error))
<<<<<<< HEAD
    {{ $error }}
=======
    <h3>Debe llenar todos los campos</h3>
>>>>>>> c73affbbd1b400ade421164494935a2481980cf8
  @endif

  <form action="updateCategory" method="post" >
    {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $Category->id }}">
      <label>Nombre de la categoria:</label><br>
      <input name="categoryName" type="text" value="{{ $Category->categoryName }}" /><br/>
      <label>Número de la categoria:</label><br>
      <input name="numberCat" type="number" value="{{ $Category->numberCat }}"/><br/>
      <input type="submit" />
  </form>


@endsection

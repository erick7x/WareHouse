@extends('layout')

@section('content')

  @if ($errors->any())

    <h3>Corregir los siguientes errores:</h3>
    <ul>

      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach

    </ul>
  @endif

      <form method="post" action="store">
        {{ csrf_field() }}
          <label>Nombre del artículo:</label><br>
          <input name="itemName" type="text" value="{{ old('itemName') }}" /><br/>
          <label>Cantidad:</label><br>
          <input name="quantity" type="number" value="{{ old('quantity') }}"/><br/>
          <label>Unidad:</label><br>
          <input name="unity" type="text" value="{{ old('unity') }}" /><br/>
          <label>Precio:</label><br>
          <input name="price" type="number" value="{{ old('price') }}" /><br/>
          <input type="submit" />
      </form>

@endsection

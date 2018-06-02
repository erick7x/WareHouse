@extends('layout')

@section('content')


@if (!empty($success))
  <h3>{{ $success }}</h3>
@endif

  @if ($errors->any())

    <h3>Debe llenar todos los campos</h3>

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

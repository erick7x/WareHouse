@extends('layout')

@section('content')


@if (!empty($success))
  <h3>{{ $success }}</h3>
@endif

  @if ($errors->any())

    <h3>Debe llenar todos los campos</h3>

  @endif
    <div class="container">
      <form method="post" action="store">
        {{ csrf_field() }}
        <div class="form-group">
          <label>Nombre del artículo:</label><br>
          <input class="form-control" name="itemName" type="text" value="{{ old('itemName') }}" /><br/>
          <label>Cantidad:</label><br>
          <input class="form-control" name="quantity" type="number" value="{{ old('quantity') }}"/><br/>
          <label>Unidad:</label><br>
          <input class="form-control" name="unity" type="text" value="{{ old('unity') }}" /><br/>
          <label>Precio:</label><br>
          <input class="form-control" name="price" type="number" value="{{ old('price') }}" /><br/>
          <input class="btn btn-success" type="submit" />
        </div>
      </form>
    </div>
@endsection

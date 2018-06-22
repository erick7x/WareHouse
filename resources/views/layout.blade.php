<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  </head>
  <body>
    <div>
      <header>
        <nav>
          <ul>
            <!-- Catalogo -->
            <div class="dropdown">
              <li class="dropbtn">
                <a href="#">Catálogo de partida</a>
              </li>
              <div class="dropdown-content">
                  <a href="addCategory">Agregar categoria al catálogo de partida</a>
                  <a href="showCategories">Mostrar categorias del catálogo de partida</a>
                  <a href="addSubCategory">Agregar subcategoria al catálogo de partida</a>
                  <a href="showSubCategories">Mostrar sub categorias del catálogo de partida</a>
                  <a href="addDescription">Agregar descripción gasto al catálogo de partida</a>
                  <a href="showDescriptions">Mostrar descripciones de Gastos del catálogo de partida</a>
                  <a href="addItem">Agregar artículo</a>
                  <a href="showItems">Mostrar artículos</a>
              </div>

            <!-- Articulo -->
            </div>
            <div class="dropdown">
              <li class="dropbtn">
                <a href="#">Articulo</a>
              </li>
              <div class="dropdown-content">
                <a href="addItem">Agregar artículo</a>
                <a href="showItems">Mostrar artículos</a>
              </div>
            </div>
          </ul>
        </nav>
      </header>
    </div>


    @yield('content')

  </body>
</html>

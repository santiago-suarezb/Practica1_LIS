<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css styles -->
    @yield('css') <!--Para indicar que en algunos momentos se agregarán cosas nuevas de css, debe ser en el header-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Patient CRUD</title>
  </head>
  <body>
    
    <div class="container">
      @yield('content') <!--Lugar donde se pondrá el contenido que está dentro de las vistas como sesion content-->
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <!-- js styles -->
  @yield('js') <!--Para indicar que en algunos momentos se agregarán cosas nuevas de js-->
  </body>
</html>
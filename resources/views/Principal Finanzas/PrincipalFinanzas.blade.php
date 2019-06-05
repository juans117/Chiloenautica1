<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="http://localhost/prueba/css/estilos.css">

</head>

<body>
  <nav class="navbar menu navbar-expand-lg navbar-dark bg-primary">
    <img src="http://localhost/prueba/imagenes/CHILOE NAUTICA.png.png" class="logo" alt="">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">


        <li class="nav-item active">
          <a class="nav-link" href="{!! route('VentasDiarias') !!}">Ventas Diarias <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{!! route('VentasMensuales') !!}">Ventas Mensuales <span class="sr-only">(current)</span></a>
        </li>
      </ul>

      <ul class="navbar-nav mr-auto w-100 justify-content-end">
        <form class="form-inline my-2 my-lg-0">

          <a class="btn btn-outline-success my-2 my-sm-0" href="{!! route('Login') !!}" type="button">salir</a>
        </form>
        </form>

    </div>
    </ul>

    </div>
  </nav>

   @yield('content1')
</body>

<footer class="mb-5 text-center">
  <h2>Soledad Muñoz</h2>
  <h4>chiloenautica.cl | cel:7891212 | fono: 781234789 | sotomayor 425 castro | horario: de 9:30 A 18:00 HRS.</h4>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>

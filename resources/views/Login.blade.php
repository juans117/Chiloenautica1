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


  <div class="row">

    <div class="col-md-3">

      <img src="http://localhost/prueba/imagenes/CHILOE NAUTICA.png.png" class="w-75  mt-5 pt-5" alt="">

    </div>
    <div class="col-md-6">
      <section class="container login text-white mt-5">
        <h1 class="text-center m-3 pb-4">LOGIN</h1>
        <form action="principal.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">*Nombre usuario</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Ingresar texto...">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">*Clave</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresar clave...">
            <small id="emailHelp" class="form-text text-white text-smaller">*Campos obligatorios.</small>
          </div>
          <div class="form-group mb-5 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <a href="#" class="text-white" data-toggle="modal" data-target="#exampleModal">Acepto términos y
              condiciones</a>

          </div>
          <button type="submit" class="btn btn-primary w-25">Ingresar</button>
        </form>

      </section>
    </div>
    <div class="col-md-3">

      <img src="http://localhost/prueba/imagenes/CHILOE NAUTICA.png.png" class="w-75  mt-5 pt-5" alt="">

    </div>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Acepta las codiciones de la empresa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <a class="btn btn-outline-success my-2 my-sm-0" href="Login.html" type="button">salir</a>

        </div>
      </div>
    </div>
  </div>

</body>

<footer class="mb-5 text-center">
  <h3>Fernando </h2>
    <h5>chiloenautica.cl | cel:7891212 | fono: 781234789 | sotomayor 425 castro | horario: de 9:30 A 18:00 HRS.</h4>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</html>
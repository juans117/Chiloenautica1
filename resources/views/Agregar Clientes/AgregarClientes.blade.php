@extends('layout')
@section('content')
  <h1></h1>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="well well-sm">
          <form class="form-horizontal" method="post">
            <fieldset>
              <legend class="text-center header">Agregar Clientes</legend>
              <form>
                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre</label>
                    <input type="Nombre" class="form-control" id="inputEmail4" placeholder="Nombre">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Rut</label>
                    <input type="Rut" class="form-control" id="inputPassword4" placeholder="Rut">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Razón Social</label>
                    <input type="Razón Social" class="form-control" id="inputEmail4" placeholder="Razón Social">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Dirección</label>
                    <input type="Dirección" class="form-control" id="inputEmail4" placeholder="Dirección">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Numero Telefonico</label>
                    <input type="Numero Telefonico" class="form-control" id="inputEmail4"
                      placeholder="Numero Telefonico">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Correo Electronico</label>
                    <input type="Correo Electronico" class="form-control" id="inputEmail4"
                      placeholder="Correo Electronico">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Cargo de persona</label>
                    <input type="Cargo de persona" class="form-control" id="inputEmail4" placeholder="Cargo de persona">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputState">Tipo de cliente</label>
                    <select id="inputState" class="form-control">
                      <option selected>Tipo de cliente</option>
                      <option> Frecuente</option>
                      <option>Nuevo</option>
                    </select>
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-horizontal">
                    <button class="
                    "><a href="" type="">Guardar</a></button>
                    <button class="btn btn-outline-success my-2 my-sm-0"><a href="" type="">Actualizar</a></button>
                    <button class="btn btn-outline-success my-2 my-sm-0"><a href="" type="">Eliminar</a></button>
                  </div>
                  <div class="col-md-4"></div>
              </div>
            </div>
        </form>
</body>
@endsection

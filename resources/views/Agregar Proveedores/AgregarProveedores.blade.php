@extends('layout')
@section('content')
  <h1></h1>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="well well-sm">
          <form class="form-horizontal" method="post">
            <fieldset>
              <legend class="text-center header">Agregar Proveedores</legend>
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre</label>
                    <input type="Nombre" class="form-control" id="inputEmail4" placeholder="Nombre">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Vendedor de contacto</label>
                    <input type="Vendedor de contacto" class="form-control" id="inputPassword4"
                      placeholder="Vendedor de contacto">
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
                    <label for="inputEmail4">Forma de Despacho</label>
                    <input type="Forma de Despacho" class="form-control" id="inputEmail4"
                      placeholder="Forma de Despacho">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Pagina Web</label>
                    <input type="Pagina Web" class="form-control" id="inputEmail4" placeholder="Pagina Web">
                  </div>

                  <legend class="text-center header">Datos de Pago</legend>


                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Rut</label>
                    <input type="Rut" class="form-control" id="inputEmail4" placeholder="Rut">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Nombre Completo </label>
                    <input type="Nombre Completo" class="form-control" id="inputPassword4"
                      placeholder="Nombre Completo">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Correo Electronico</label>
                    <input type="Correo Electronico" class="form-control" id="inputEmail4"
                      placeholder="Correo Electronico">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Numero de Cuenta</label>
                    <input type="Numero de Cuenta" class="form-control" id="inputEmail4" placeholder="Numero de Cuenta">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputState">Banco</label>
                    <select id="inputState" class="form-control">
                      <option selected>Seleccione un Banco</option>
                      <option> Banco Bci </option>
                      <option>Banco de Chile</option>
                      <option>Banco estado</option>
                      <option>Banco Santander</option>
                      <option>Banco BICE</option>
                      <option>Banco Condell</option>
                      <option>Banco CrediChile</option>
                      <option>Banco Edwars</option>
                      <option>Banco Falabella</option>
                      <option>Banco Internacional</option>
                      <option>Banco Itau</option>
                      <option>Banco Ripley</option>
                      <option>Banco Security</option>
                      <option>Banco Santander Banefe</option>
                      <option>Banco Scotiabank</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputState">Forma de pago</label>
                    <select id="inputState" class="form-control">
                      <option selected>Forma de Pago</option>
                      <option>Transferencia</option>
                      <option>Pie 30-60-90</option>
                      <option>Cheque 30-60-90-120</option>
                      <option>Cheque 45 Dias</option>
                      <option>Cheque 60 Dias</option>
                      <option>Credito</option>
                    </select>
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-horizontal">
                    <button class="btn btn-outline-success my-2 my-sm-0"><a href="" type="">Guardar</a></button>
                    <button class="btn btn-outline-success my-2 my-sm-0"><a href="" type="">Actualizar</a></button>
                    <button class="btn btn-outline-success my-2 my-sm-0"><a href="" type="">Eliminar</a></button>
                  </div>
                  <div class="col-md-4"></div>
              </div>
            </div>
</body>
@endsection

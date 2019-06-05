@extends('layout')
@section('content')
  <h1></h1>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="well well-sm">
          <form class="form-horizontal" method="post">
            <fieldset>
              <legend class="text-center header">Agregar Productos</legend>
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre del producto</label>
                    <input type="Nombre del producto" class="form-control" id="inputEmail4" placeholder="Nombre del producto">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Stock del producto</label>
                    <input type="Stock del producto" class="form-control" id="inputPassword4" placeholder="Stock del producto">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Valor de compra neto</label>
                    <input type="Valor de compra neto" class="form-control" id="inputEmail4" placeholder="Valor de compra neto">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Proveedor de Origen</label>
                    <input type="Dirección" class="form-control" id="inputEmail4" placeholder="Dirección">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Modelo</label>
                    <input type="text" class="form-control" id="inputEmail4"
                      placeholder="Modelo">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Numero de Factura</label>
                    <input type="Correo Electronico" class="form-control" id="inputEmail4"
                      placeholder="Numero de Factura">
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
        </form>
</body>
@endsection

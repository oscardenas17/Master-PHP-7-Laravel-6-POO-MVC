<div class="d-flex justify-content-center text-center">

  <form class="p-5 bg-light" method="post">
  

    <div class="form-group">
      <label for="email">Correo electronico:</label>
        <div class="input-group">
          <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-envelope"></i>
              </span>
        </div>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="ingresoEmail">
        </div>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>


    <div class="form-group">
      <label for="password">Contraseña:</label>
        <div class="input-group">
          <div class="input-group-prepend">
                <span class="input-group-text">
                <i class="fas fa-lock"></i>
              </span>
          </div>
            <input type="password" class="form-control" id="Password" name="ingresoPassword">
        </div>
    </div>


    <?php
    /*--============================
        REGISTRO    - REGISTRO    - manera de instanciar la clasede un metodo  estatico, usar palabra static en el controlador devuelve con return, para usar este objeto en la vista y hacer otras acciones como aca con el if
    ========================*/
     //$registro = ControllerFormularios::ctrRegistro();

     /*--============================
     REGISTRO    - manera de instanciar la clasede un metodo no estatico, em el controlador devuelve con echo , se ejecutan en el controlador, las acciones se hacen en el controlador
    ========================*/

    $ingreso = new ControllerFormularios();
    $ingreso -> ctrIngreso();
   
    ?>


    <button type="submit" class="btn btn-primary">Ingresar</button>
  </form>
</div>
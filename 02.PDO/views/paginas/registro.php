<div class="d-flex justify-content-center text-center">

  <form class="p-5 bg-light" method="post">
  <h3 class="mb-3">Registrate</h3>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fas fa-user"></i>
            </span>
        </div>
            <input type="text" class="form-control" id="nombre" name="registroNombre">  
        </div>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
        <div class="input-group">
          <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-envelope"></i>
              </span>
        </div>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="registroEmail">
        </div>
       
    </div>


    <div class="form-group">
      <label for="password">Contraseña:</label>
        <div class="input-group">
          <div class="input-group-prepend">
                <span class="input-group-text">
                <i class="fas fa-lock"></i>
              </span>
          </div>
            <input type="password" class="form-control" id="Password" name="registroPassword">
            <small id="emailHelp" class="form-text text-muted">La contraseña debe contener minimo 8 caracteres, una letra en minuscula, una letra en mayuscula, el menos un numero, al menos un simbolo</small>
        </div>
    </div>


    <?php
    /*--============================
        REGISTRO    - manera de instanciar la clasede un metodo no estatico, em el controlador devuelve con echo , se ejecutan en el controlador, las acciones se hacen en el controlador
    ========================*/
     //$registro = new ControllerFormularios();
     // $registro-> ctrRegistro();
   

     /*--============================
     REGISTRO    - manera de instanciar la clasede un metodo  estatico, usar palabra static en el controlador devuelve con return, para usar este objeto en la vista y hacer otras acciones como aca con el if
    ========================*/
    $registro = ControllerFormularios::ctrRegistro();

    if($registro=="ok"){

      echo '<script>
          if (window.history.replaceState){
            window.history.replaceState(null,null, window.location.href);
          }
        </script>';

      echo '<div class="alert alert-success "> Usuario registrado</div>';
    }

    if($registro =="error"){
      echo '<script>
      if (window.history.replaceState){
        window.history.replaceState(null,null, window.location.href);
      }
    </script>';

  echo '<div class="alert alert-danger "> No se permiten caracteres especiales en el nombre y/o contraseña</div>';
    }

    ?>


    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
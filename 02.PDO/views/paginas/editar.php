<?php
  if(isset($_GET["id"])){

    $item = "id";
    $valor = $_GET["id"];

    $usuario = ControllerFormularios::ctrSeleccionarRegistros($item,$valor);
   /* echo'<pre>'; print_r($usuario); echo'</pre>';*/
    
  }
?>

<div class="d-flex justify-content-center text-center">

  <form class="p-5 bg-light" method="post">
  <h3 class="mb-3">Editar datos</h3>
    <div class="form-group">
  
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fas fa-user"></i>
            </span>
        </div>
            <input type="text" placeholder="Escriba su nombre" class="form-control" id="nombre" name="actualizarNombre" 
value="<?php echo $usuario["nombre"]; ?>" >  
        </div>
    </div>

    <div class="form-group">
     
        <div class="input-group">
          <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-envelope"></i>
              </span>
        </div>
            <input type="email"  placeholder="Escriba su email" class="form-control" id="email" aria-describedby="emailHelp" name="actualizarEmail" value="<?php  echo $usuario["email"];   ?>"> 
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
            <input type="password"  placeholder="Escriba su password" class="form-control" id="Password" name="actualizarPassword" >

            <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>" >

            <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>" >

        </div>
    </div>

<?php
    $actualizar = new ControllerFormularios();
     $actualizar -> ctrActualizarRegistro();
?>

  


    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
</div>
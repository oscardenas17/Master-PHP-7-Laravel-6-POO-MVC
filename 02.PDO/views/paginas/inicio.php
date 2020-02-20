<?php

if(!isset($_SESSION["validarIngreso"])){
  echo '<script>window.location = "index.php?pagina=ingreso";</script>';
  return;

}else{
  if($_SESSION["validarIngreso"] != "ok"){

    echo '<script>window.location = "index.php?pagina=ingreso";</script>';
    return;
  }
}

$usuarios =  ControllerFormularios::ctrSeleccionarRegistros(null, null);
/*visualizar si trae datos el array echo '<pre>'; print_r($usuarios); echo'</pre>'  */


?>




<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>

        <tbody> 
          <?php foreach($usuarios as $key => $value): ?>
            <tr>
              <td> <?php echo ($key+1) ?> </td>
              <td> <?php echo $value['nombre'] ?>  </td>
              <td> <?php echo $value['email'] ?>  </td>
              <td> <?php echo $value['fecha'] ?>  </td>
              <td>
                <div class="btn-group">
                  <a href="index.php?pagina=editar&id=<?php echo $value['id'] ; ?>"class="btn btn-warning mr-1"><i class="fas fa-pencil-alt"></i></a>


                 <form method="post">

                  <input type="hidden" value="<?php echo $value['id'] ; ?>" name="eliminarRegistro" >

                  <button type="submit" class="btn btn-danger "><i class="fas fa-trash"></i></button>


                  <?php 
                      $eliminar = new ControllerFormularios();
                      $eliminar->ctrEliminarRegistro();
                  
                  ?>
                 </form>


                </div>
              </td>
            </tr>

          <?php endforeach ?>

       
      
        </tbody>
      </table>
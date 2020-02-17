<?php
$usuarios =  ControllerFormularios::ctrSeleccionarRegistros();
/*visualizar si trae datos el arrayecho '<pre>'; print_r($usuarios); echo'</pre>'*/

?>


<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>

        <tbody> 
          <?php foreach($usuarios as $key => $value): ?>
            <tr>
              <td> <?php echo $value['nombre'] ?>  </td>
              <td> <?php echo $value['email'] ?>  </td>
              <td> <?php echo $value['fecha'] ?>  </td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning mr-1"><i class="fas fa-pencil-alt"></i></button>
                  <button class="btn btn-danger "><i class="fas fa-trash"></i></button>
                </div>
              </td>
            </tr>

          <?php endforeach ?>

       
      
        </tbody>
      </table>
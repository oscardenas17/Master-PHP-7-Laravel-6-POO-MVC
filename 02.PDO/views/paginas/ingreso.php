<div class="d-flex justify-content-center text-center">

  <form class="p-5 bg-light">
  <h3 class="mb-3">Inicia Sesión</h3>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fas fa-user"></i>
            </span>
        </div>
            <input type="text" class="form-control" id="nombre">  
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
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
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
            <input type="password" class="form-control" id="Password">
        </div>
    </div>





    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
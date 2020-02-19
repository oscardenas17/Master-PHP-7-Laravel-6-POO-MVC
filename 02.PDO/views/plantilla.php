<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title> MODELO MVC</title>
  </head>
  <body>
  

    <!--=========================================
                          LOGOTIPO
    ==========================================-->
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>

	<!--=====================================
	BOTONERA
	======================================-->

	<div class="container-fluid  bg-light">
		
		<div class="container">

			<ul class="nav nav-justified py-2 nav-pills">
			
			<?php if (isset($_GET["pagina"])): ?>


				<?php if ($_GET["pagina"] == "registro"): ?>
					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=registro">Registro</a>
					</li>
				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=registro">Registro</a>
					</li>					
				<?php endif ?>




				<?php if ($_GET["pagina"] == "ingreso"): ?>
					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
					</li>
				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
					</li>					
				<?php endif ?>



				<?php if ($_GET["pagina"] == "inicio"): ?>
					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
					</li>
				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
					</li>					
				<?php endif ?>



				<?php if ($_GET["pagina"] == "salir"): ?>
					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=salir">Salir</a>
					</li>
				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=salir">Salir</a>
					</li>					
				<?php endif ?>
			<?php else: ?>

				<!-- GET: $_GET["variable"] Variables que se pasan como parámetros Vía URL ( También conocido como cadena de consulta a través de la URL) 
				Cuando es la primera variable se separa con ?
				las que siguen a continuación se separan con &
				-->

				<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=registro">Registro</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=salir">Salir</a>
				</li>
				
			<?php endif ?>

			</ul>

		</div>

	</div>
<!--=========================================
                        CONTENIDO
==========================================-->
<div class="container-fluid">
    <div class="container py-5">



<!--=========================================
 Lista blanca: Validando ingreso a páginas por url 
==========================================-->

        <?php

        if(isset($_GET["pagina"])){

            if($_GET["pagina"]=="registro" ||
                $_GET["pagina"]=="ingreso" ||
				$_GET["pagina"]=="inicio" ||
				$_GET["pagina"]=="editar" ||
                $_GET["pagina"]=="salir" ){
                    include "paginas/".$_GET["pagina"].".php";
                }else{
					include "paginas/error404.php" ;
				}
        }else{
            include "paginas/registro.php" ;
        }
            
        ?>
   
    </div>
</div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6ef9725fed.js" crossorigin="anonymous"></script>
  </body>
</html>
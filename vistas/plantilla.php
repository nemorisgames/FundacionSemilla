<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fundacion Semilla</title>

    <!--=====================================
	PLUGINS DE CSS
	======================================-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../../vistas/css/bootstrap.css">
    <link rel="stylesheet" href="../../../vistas/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">


    <!--=====================================
	PLUGINS DE JS
    ======================================-->


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
   

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled Fontawesome-->
    <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

    <script src="../vistas/js/likes.js"></script>
    <script src="../vistas/js/post.js"></script>

</head>
    <!--=====================================
	CONTENIDO
	======================================-->
        <?php 

				

				if(isset($_GET["pagina"])){

					if($_GET["pagina"] == "registro" ||
					   $_GET["pagina"] == "ingreso" ||
					   $_GET["pagina"] == "inicio" ||
                       $_GET["pagina"] == "avatar" ||
                       $_GET["pagina"] == "desafio" ||
                       $_GET["pagina"] == "videos" ||
                       $_GET["pagina"] == "blog" ||
					   $_GET["pagina"] == "salir"){

						include "paginas/".$_GET["pagina"].".php";

					}else{

						include "paginas/error404.php";
					}


				}else{

					include "paginas/inicio.php";

				}

				

			 ?>



    


    


</html>
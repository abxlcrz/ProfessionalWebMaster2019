<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>Proyecto webmaster 2019</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Khand:500,600" rel="stylesheet">
  <!-- icono -->
  <link rel="shortcut icon" href="img/sangucheta-logo.png">

  <!--Mi hoja de estilos-->
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
  <!--Header y menú principal-->
  <header>
    <!--Navbar-->
    <nav class="navbar  navbar-expand-lg navbar-light white fixed-top scrolling-navbar">
      <!--Container nav-->
      <div class="container">
        <!-- logo-->
        <a class="navbar-brand waves-effect" href="index.html">
          <strong class="green-text h3 font-weight-normal ">La Sangucheta</strong></a>


        <!-- toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- contenido responsive-->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- items -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="index.html">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>


            <!-- categorias -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
              <div class="dropdown-menu dropdown-primary " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item waves-effect" href="#">Superliga</a>
                <a class="dropdown-item waves-effect" href="#">Copa Libertadores</a>
                <a class="dropdown-item waves-effect" href="champions-league.html">Champions League</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="contacto.php">Contacto</a>
            </li>
          </ul>
          <!-- items -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://www.facebook.com" class="nav-link border border-light rounded waves-effect mx-1" target="_blank">
                <i class="fab fa-facebook-f"></i>Facebook
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com" class="nav-link border border-light rounded  waves-effect mx-1" target="_blank">
                <i class="fab fa-twitter"></i>Twitter
              </a>
            </li>

            </li>
            <li class="nav-item">
              <a href="https://twitch.tv" class="nav-link border border-light rounded waves-effect mx-1" target="_blank">
                <i class="fab fa-twitch mr-2"></i>Twitch
              </a>
            </li>
            <li>
              <div class="text-center">
                <a href="" class="nav-link border border-light rounded  waves-effect btn-green mx-1 white-text" data-toggle="modal" data-target="#elegantModalForm">Iniciar Sesión</a>
              </div>
            </li>
          </ul>


        </div>
        <!-- Contenido responsive-toggle-->
      </div>
      <!--container nav-->

    </nav>
    <!--/.Navbar-->
  </header>
  <!-- Modal -->
  <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content form-elegant">
        <!--Header-->
        <div class="modal-header text-center">
          <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Iniciar Sesion</strong></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body mx-4">
          <!--Body-->
          <div class="md-form mb-5">
            <input type="email" id="Form-email1" class="form-control validate">
            <label data-error="formato incorrecto" data-success="correcto" for="Form-email1">email</label>
          </div>

          <div class="md-form pb-3">
            <input type="password" id="Form-pass1" class="form-control validate">
            <label data-error="contraseña incorrecta" data-success="correcto" for="Form-pass1">contraseña</label>

          </div>

          <div class="text-center mb-3">
            <button type="button" class="btn green btn-block  z-depth-1a">logeate</button>
          </div>

        </div>
        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
          <p class="font-small grey-text  text-right d-flex justify-content-center">No tenes cuenta? <a href="registro.html" class="blue-text ml-1">
              registrate</a></p>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!--Contenedor principal-->
  <main class="container row contenedor mt-5 wow fadeIn ">





    <!-- Fromulario registro -->
    <div class="container card col-lg-7 justify-content-center" style="margin-top: 10%;margin-bottom: 5%;">
      <?php
      //Testeamos que llegan los datos
      /*$_POST['nombre']
echo $_POST['nombre'];
echo $_POST['email'];
echo $_POST['localidad'];
echo $_POST['mensaje'];*/

      //Armar el array POST
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $email = $_POST['email'];
      $asunto = $_POST['asunto'];
      $mensaje = $_POST['mensaje'];


      //Configuramos el envio por mail
      $destinatario = "nlyflames@gmail.com";
      $cuerpoMensaje = "​Nuevo correo de " . $nombre . $apellido . " <br>Email: " . $email . " <br>Mensaje: " . $mensaje . " <br>Enviado el " . date("d/m/Y h:m");
      //Adicionales, formato HTML al cuerpo y From:
      $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
      $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $cabeceras .= 'From: ' . $nombre . ' <' . $email . '>' . "\r\n";

      //Enviamos mediante la funcion mail()
      @$envio = mail($destinatario, $asunto, $cuerpoMensaje, $cabeceras);


      //Verficamos el envio (true o false)
      if ($envio == true) {
        ?>



        <h5 class="card-header green white-text text-center py-4">
          <strong><?php echo "Mensaje enviado. Gracias por contactarnos,  " . $nombre; ?>
          </strong>
        </h5>


        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

          <!-- Form -->
          <form action="sendBD.php" method="POST" class="text-center" style="color: #757575;">

            <div class="form-row">
              <div class="col">
                <?php


                  //Conexion MySQL
                  $host = "localhost"; //127.0.0.1
                  $user = "id8749258_bboycien";
                  $pass = "neverloseyourflames";
                  $bd = "id8749258_datos";
                  @$conexion = mysqli_connect($host, $user, $pass, $bd) or die("hubo un error en la conexion");

                  //Consulta de alta (INSERT)


                  $query2 = "INSERT INTO contactos VALUES ('','$nombre','$apellido','$email','$asunto','$mensaje')"; ?>
                <h5 class=" text-center py-4">
                  <?php
                    $consulta = mysqli_query($conexion, $query2) or die("Error en la consulta");



                    if ($consulta == true) {
                      echo "Contacto subido!";
                    } else {
                      echo "Error en la subida :(";
                    } ?></h5> <?php

                                //liberar la memoria de la consulta
                                //mysql_free_result($consulta);
                                //Cerrar la conexion
                                mysqli_close($conexion);
                              } else {
                                ?>
                <h5 class="card-header green white-text text-center py-4">
                  <strong>
                    <?php echo "Hubo un error en el envio."; ?>
                  </strong>
                </h5>

                <h5 class=" text-center py-4">
                  <?php echo " Por favor intentá más tarde, " . $nombre; ?>
                </h5>
              <?php


              }





              ?>
              </div>
            </div>

            <hr>

          </form>
          <!-- Formulario -->

        </div>

    </div>
    <!-- registro-->





  </main>
  <!-- Modal -->


  <!-- Footer -->
  <footer class="page-footer text-center font-small unique-color-dark darken-2 mt-4 wow fadeIn ">

    <!-- redes sociales -->
    <div class="green">
      <div class="container">
        <!--div row-->
        <div class="row py-4 d-flex align-items-center">

          <!--texto redes-->
          <div class="col-md-5 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h4 class="mb-0 white-text">Seguinos en nuestras redes sociales!</h4>
          </div>
          <!--texto redes-->

          <!--iconos redes-->
          <div class="col-md-7 col-lg-7 text-center text-md-right">
            <!--Facebook-->
            <a class="fb-ic ml-0">
              <i class="fab fa-facebook white-text mr-3 btn-lg"> </i>
            </a>
            <!--Twitter-->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-3 btn-lg"> </i>
            </a>

            </a>
            <!--Twitch-->
            <a class="li-ic">
              <i class="fab fa-twitch white-text mr-3 btn-lg"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text mr-3 btn-lg"> </i>
            </a>
            <!--YouTube-->
            <a class="yt-ic">
              <i class="fab fa-youtube white-text mr-3 btn-lg"> </i>
            </a>
          </div>
          <!--iconos redes-->

        </div>
        <!--div row-->
      </div>
    </div>
    <!-- redes sociales -->

    <!--links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
      <div class="row mt-3 justify-content-around">

        <!--web-->
        <div class="col-md-4 col-lg-4 col-xl-3 mb-4">
          <h6 class="text-uppercase font-weight-bold">
            <strong>La sangucheta</strong>
          </h6>
          <hr class="green accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>La sangucheta es un portal de noticias "amateur" referidas al deporte </p>
        </div>
        <!--web-->


        <!--contacto-->
        <div class="col-md-4 col-lg-4 col-xl-3 mb-4">
          <h6 class="text-uppercase font-weight-bold">
            <a href="contacto.html"><strong>Contacto</strong></a>
          </h6>
          <hr class="green accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> Av. Santa Fe 3550, CABA</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> lasangucheta@indicom.ar</p>

          <p>
            <i class="fa fa-phone mr-3"></i>0303456 </p>

        </div>
        <!--contacto-->

      </div>
    </div>
    <!--links-->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 La sangucheta. Todos los derechos reservados.

    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
  <script>
    $(".leer").addClass("green-text ");
    $(".jugador").addClass("rgba-green-light");
  </script>
  <!--<script>
	$(document).ready(function(){
		$(".noticia").hover(function(){
			$(".zoom").css("transform","scale(1.2,1.2)"), function(){
				$(this).css("transform","scale(1,1)");
			};
		});
	});
</script>-->
</body>

</html>
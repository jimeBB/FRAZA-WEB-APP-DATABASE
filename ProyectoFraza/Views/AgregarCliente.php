<!doctype html>
<html>
    <head>
<!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>Taller Fraza - Agregar Cliente</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="/ProyectoFraza/Views/css/style.css">
  <link rel="stylesheet" href="css/style.css">


	<!-- Google web font
   ================================================== -->
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body>


<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="index.html">Taller Fraza</a>
              </div>

              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                     	<ul id="nav-menu">
                        <li><a href="../Controllers/homepage.php">Inicio</a></li>
                        <li><a href="../Controllers/ContMostrarClientes.php">Clientes</a></li>
                         <li><a href="../Controllers/ContMostrarGarantía.php">Garantias</a></li>
                            <?php
                         if($rol == "director" || $rol == "Director"){

                        echo ' <li><a href="../Controllers/ContContUsuarios.php">Empleados</a></li>';
                            }

                         ?>
                         <li><a href="../Views/login.php">Cerrar sesión</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>


<!-- Header section
================================================== -->
<section id="header" class="header-four">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Agregar Cliente</h1>

           		</div>
			</div>

		</div>
	</div>
</section>


<!-- Agregar Cliente
================================================== -->
<section id="clientes">
   <div class="container">
      <div class="row">

     <form name='form' method='post' id="agregarCliente">

     </div>
               <p id="p1"> Nombre:</p><input type="text" class="textbox" id="txt_nombreA" name="txt_nombre" placeholder="Nombre" required/>


         <div>
         <p id="p1"> Apellidos:</p><input type="text" class="textbox" id="txt_apellidoA" name="txt_apellido" placeholder="Apellidos" required/>
      </div>
      <div>
         <p> Correo:</p><input type="text" class="textbox" id="txt_correoA" name="txt_correo" placeholder="Correo" />
      </div>
      <div>
          <p> Dirección:</p><input type="text" class="textbox" id="txt_direccionA" name="txt_direccion" placeholder="Dirección" />
      </div>
      <div>
         <p> Teléfono:</p><input type="text" class="textbox" id="txt_telefonoA" name="txt_telefono" placeholder="Teléfono" />
      </div>
      <div>
          <input id="btn_agregar"type="submit" name="but_submit" value = "Agregar" />
      </div>
    </form>

      </div>
   </div>
</section>





<!-- Javascript
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>

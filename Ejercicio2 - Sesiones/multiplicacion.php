<?php 
	session_start();
 ?>

 <html>
 <head>
 	<title></title>
	<!-- Versión compilada y comprimida del CSS de Bootstrap -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	 
	<!-- Tema opcional -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
	 
	<!-- Versión compilada y comprimida del JavaScript de Bootstrap -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

 </head>
 <body>
 	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="/AppData/login.php">Login</a></li>
	        <li><a href="/AppData/suma.php">Suma</a></li>
	        <li><a href="/AppData/resta.php">Resta</a></li>
	        <li class="active"><a href="/AppData/multiplicacion.php">Multiplicación<span class="sr-only">(current)</span></a></li>
	        <li><a href="/AppData/division.php">División</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
        	<li><a href="/AppData/logout.php">Logout</a></li>
  		  </ul>
	    </div>
	  </div>
	</nav>
	<?php 	if (isset($_SESSION['num1']) && isset($_SESSION['num2']))
		echo $_SESSION['num1']*$_SESSION['num2'];
	else
		echo "No hay números registrados"; ?>
 </body>
 </html>
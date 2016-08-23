 <html>
 <head>
 	<title>Inicio de sesión</title>
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
	        <li class="active"><a href="/AppData/login.php">Login<span class="sr-only">(current)</span></a></li>
	        <li><a href="/AppData/suma.php">Suma</a></li>
	        <li><a href="/AppData/resta.php">Resta</a></li>
	        <li><a href="/AppData/multiplicacion.php">Multiplicación</a></li>
	        <li><a href="/AppData/division.php">División</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
        	<li><a href="/AppData/logout.php">Logout</a></li>
  		  </ul>
	    </div>
	  </div>
	</nav>
	<div class="panel-body" align="center">
	
	 <form action="Verify.php" method="POST">
		 <div class="form-group">
			 <label for="username">Nombre de usuario</label>
			 <div class="input-group"><input type="text" name="username" placeholder="Username" required></div>
		 </div>
		 <div class="form-group">	 
		 <label>Password</label>
		 <div class="input-group"><input type="password" name="pass" placeholder="*****" required></div>
		 </div>
		 <div class="form-group">
		 <label>Número 1:</label>
		 <input type="text" name="num1" placeholder="#" required>
		 </div>
		 <div class="form-group">
		 <label>Número 2:</label>
		 <input type="text" name="num2" placeholder="#" required><br><br>
		 </div>
		 <input type="submit" class="btn btn-primary"  name="submitReg" value="Iniciar Sesión">
	 </form>
	 
	 </div>
 </body>
 </html>
  
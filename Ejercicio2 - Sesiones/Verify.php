<?php 
  	if(isset($_POST['submitReg']))
  	{
  		$nom = $_POST['username'];
	 	$contra = $_POST['pass'];
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
	 	session_start();
	 	$_SESSION['nombre'] = $nom;
	 	$_SESSION['contra'] = $contra;
	 	$_SESSION['num1'] = $num1;
	 	$_SESSION['num2'] = $num2;
	 	header("location: suma.php");
	}
	//revisar si pede chear que se hallan llenado todos los campos
?>
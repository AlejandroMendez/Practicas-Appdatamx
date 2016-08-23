 <html>
 <head>
 	<title></title>
 </head>
 <body>
	 <form action="aca2.php" method="POST">
	 <input type="text" id="word" name="word" placeholder="word"><br><br>
	 <?php 
	$frase = $_POST['word'];
	$palabras = explode(" ",$frase);
	$num_pal = str_word_count($frase);
	echo '<input type="text" disabled value=" ';
	for ($i=($num_pal-1); $i>=0; $i--) 
	{ 
		echo $palabras[$i];
		echo " ";
	}
	echo '">';
 ?>
 	 <br><br>
	 <input type="submit" value="Do reverse">
	 </form>
 </body>
 </html>


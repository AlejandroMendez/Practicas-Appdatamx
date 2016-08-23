
<html>
<head>
	<title>Matricilla</title>
</head>
<body>
<?php 
	$matriz = array(
					array("O", "W", "O"), 	
					array("O", "O", "G"),
					array("G", "O", "W")
				    );
	foreach ($matriz as $a) 
	{
		// print_r($a);
		foreach ($a as $v) 
		{
			print_r($v);
		}
		echo '<br>';
	}
?>
</body>
</html>
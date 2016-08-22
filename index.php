<html>
<head>
	<title></title>
</head>
<body>  <!lo que ve el cliente>
<h1> Hola mundo </h1>

<?php

	$nombre = "RDA";
	//echo "hola php";
	echo "<h2> Hola php soy $nombre</h2>"; // puedo poner codigo html en php o al revez
	// se puede concatenar a secas como arriba
	echo "<h2> Hola php soy ".$nombre."</h2>";
	// se puede concatenar con "." 
	echo '<h2> Hola php soy $nombre</h2>';
	// con comillas simples muestra el nombre de la variable no el contenido

	//muestro un numero random
	$numeroRandom = mt_rand(0,100);
	echo "<h2>".$numeroRandom."</h2>";


	//10 vesces mostrar un numero random
	$veces = 10;

	for ($i=0; $i < $veces; $i++) { 
		$j=$i+1;
		echo "<h2>".$j." = ".mt_rand(0,9)."</h2>";
	}

	//contar  cuantas veces sale el numero

	$contN0 = 0;
	$contN1=0;
	$contN2=0;
	$contN3=0;
	$contN4=0;
	$contN5=0;
	$contN6=0;
	$contN7=0;
	$contN8=0;
	$contN9=0;

	for ($i=0; $i < $veces; $i++) { 
		$j=$i+1;
		
		switch (variable) {
			case 1:
				break;
		
			default:
				# code...
				break;
		}
	}
echo "<h2>".$j." = ".mt_rand(0,9)."</h2>";
	

	//crear un switch y crear un case por cada uno
?>

</body>
</html>
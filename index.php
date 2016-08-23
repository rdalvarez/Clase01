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

	$contN0=0;
	$contN1=0;
	$contN2=0;
	$contN3=0;
	$contN4=0;
	$contN5=0;
	$contN6=0;
	$contN7=0;
	$contN8=0;
	$contN9=0;
	$porcentajeN0=0;
	$porcentajeN1=0;
	$porcentajeN2=0;
	$porcentajeN3=0;
	$porcentajeN4=0;
	$porcentajeN5=0;
	$porcentajeN6=0;
	$porcentajeN7=0;
	$porcentajeN8=0;
	$porcentajeN9=0;

	$veces = 100;
	//crear un switch y crear un case por cada uno
	for ($i=0; $i < $veces; $i++) { 
		
		switch (mt_rand(0,9)) {
			case 0:
				$contN0++;
				$porcentajeN0 = ($contN0*100)/$veces;
				break;
			case 1:
				$contN1++;
				$porcentajeN1 = ($contN1*100)/$veces;
				break;
			case 2:
				$contN2++;
				$porcentajeN2 = ($contN2*100)/$veces;
				break;
			case 3:
				$contN3++;
				$porcentajeN3 = ($contN3*100)/$veces;
				break;
			case 4:
				$contN4++;
				$porcentajeN4 = ($contN4*100)/$veces;
				break;
			case 5:
				$contN5++;
				$porcentajeN5 = ($contN5*100)/$veces;
				break;
			case 6:
				$porcentajeN6 = ($contN6*100)/$veces;
				//agregar en el case que no se repita un numero un %5 mas
				if ($porcentajeN6<5) {
					$contN6++;	
				}
				else
				{
					$i--;
					continue;
				}
				break;
			case 7:
				$contN7++;
				$porcentajeN7 = ($contN7*100)/$veces;
				break;
			case 8:
				$contN8++;
				$porcentajeN8 = ($contN8*100)/$veces;
				break;
			default:
				$contN9++;
				$porcentajeN9 = ($contN9*100)/$veces;
		}
	}

	//agrego el %
	echo "<h2>0: " . $contN0 . " " . $porcentajeN0 . "%</h2>";
	echo "<h2>1: " . $contN1 . " " . $porcentajeN1 . "%</h2>";
	echo "<h2>2: " . $contN2 . " " . $porcentajeN2 . "%</h2>";
	echo "<h2>3: " . $contN3 . " " . $porcentajeN3 . "%</h2>";
	echo "<h2>4: " . $contN4 . " " . $porcentajeN4 . "%</h2>";
	echo "<h2>5: " . $contN5 . " " . $porcentajeN5 . "%</h2>";
	echo "<h2>6: " . $contN6 . " " . $porcentajeN6 . "%</h2>";
	echo "<h2>7: " . $contN7 . " " . $porcentajeN7 . "%</h2>";
	echo "<h2>8: " . $contN8 . " " . $porcentajeN8 . "%</h2>";
	echo "<h2>9: " . $contN8 . " " . $porcentajeN9 . "%</h2>";
	


?>

</body>
</html>
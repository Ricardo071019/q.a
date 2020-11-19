<?php 
if (isset($_POST['dimensao']) && 
	isset($_POST['inicio']) &&
	isset($_POST['fim']) &&
	isset($_POST['vp']) &&
	isset($_POST['ordenacao'])
) {
	// Variaveis
	$dim = $_POST['dimensao'];
	$inicio = $_POST['inicio'];
	$fim = $_POST['fim'];
	$vp = $_POST['vp'];
	$ordenacao = $_POST['ordenacao'];
	$numeros = array();
	
	$soma = 0;
	$produto = 1;
	$media = 0 ;


	//criar array
	for ($i=0; $i <$dim ; $i++) { 
		$numeros[$i] = rand($inicio,$fim);
		echo $numeros[$i] . ',';
}
echo "<br>";
echo "A pocurar por ". $vp .'</h2>';
foreach ($numeros as $posicao=> $numero ) {
	if ($vp == $numero) {
		echo $posicao . " ";
	}
	$soma = $soma + $numero ;
	//$soma += $numero;

	$produto *= $numero;


}

 $media = $soma/$dim;
 	echo "<h5> Soma =" .$soma. "</h5>"; 
 	echo "<h5> Produto =" .$produto. "</h5>"; 
	echo "<h5> Media =" .$media. "</h5>"; 


	$exc=true;
	if ($ordenacao == "crescente") {
	while($exc) { 
		//Ordenar Cresente
		$exc = false;
		for ($i=0; $i<$dim-1 ; $i++) { 
		if ($numeros[$i]> $numeros[$i + 1])
		 {
		 	$exc = true;
			$troca=$numeros[$i];
			$numeros[$i] = $numeros[$i+ 1];
			$numeros[$i + 1] = $troca;

			}

		}
	}
}
else{
	while($exc) { 
		//Ordenar Decresente
		$exc = false;
		for ($i=0; $i<$dim-1 ; $i++) { 
		if ($numeros[$i]> $numeros[$i + 1])
		 {
		 	$exc = true;
			$troca=$numeros[$i];
			$numeros[$i] = $numeros[$i+ 1];
			$numeros[$i + 1] = $troca;
		}
	}

}
}
//array ordenado
for ($i=0; $i <$dim ; $i++) { 
		echo $numeros[$i] . ',';
}


	



}

else {
	echo "<h3 color;#ff000>erro<h1>";
}






 ?>
<h1>Ecuación de segundo grado</h1>

<?php
	if(isset($_GET["valor_a"]))
	{
		$valor_a= $_GET["valor_a"];
	}
	else{
		$valor_a= 0;
	}
	if(isset($_GET["valor_b"]))
	{
		$valor_b= $_GET["valor_b"];
	}
	else{
		$valor_b= 0;
	}
	if(isset($_GET["valor_c"]))
	{
		$valor_c= $_GET["valor_c"];
	}
	else{
		$valor_c= 0;
	}
?>

<form action="FormaCuadraticaLeer.php" method="get">
	<input type="number" name="valor_a" id="valor_a">
	<input type="number" name="valor_b" id="valor_b">
	<input type="number" name="valor_c" id="valor_c">
	<input type="submit" name="Calcular">
</form>

<?php
	

	$disc=sqrt(pow($valor_b,2)-4*$valor_a*$valor_c);

	if(isset($_GET["valor_a"]) and isset($_GET["valor_b"]) and isset($_GET["valor_c"]) )
	{
		if($disc>0){
			$resp1=(-$valor_b+sqrt(pow($valor_b,2)-4*$valor_a*$valor_c))/(2*$valor_a);
			$resp2=(-$valor_b-sqrt(pow($valor_b,2)-4*$valor_a*$valor_c))/(2*$valor_a);
			echo "x<sub>1</sub>=".$resp1."<br>";
			echo "x<sub>2</sub>=".$resp2."<br>";
		}
			elseif($disc==0){
				$resp1=(-$valor_b+sqrt(pow($valor_b,2)-4*$valor_a*$valor_c))/(2*$valor_a);
				echo "x<sub>1</sub>=".$resp1."<br>";
				}
				else{
					echo "La ecuación tiene raíces imaginarias";
				}
	
	/*for ($i=1; $i <=12 ; $i++) { 
		echo $num." * ".$i." = ".$num*$i."<br>";
	}*/
	}
?>

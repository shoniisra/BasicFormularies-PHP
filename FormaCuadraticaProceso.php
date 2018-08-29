<?php
	$valor_a= $_GET["valor_a"];
	$valor_b= $_GET["valor_b"];
	$valor_c= $_GET["valor_c"];

	$disc=sqrt(pow($valor_b,2)-4*$valor_a*$valor_c);
		
		
		$resp1=(-$valor_b+sqrt(pow($valor_b,2)-4*$valor_a*$valor_c))/(2*$valor_a);
		
		$resp2=(-$valor_b-sqrt(pow($valor_b,2)-4*$valor_a*$valor_c))/(2*$valor_a);
		
	
		if($disc>0){
			echo "x<sub>1</sub>=".$resp1."<br>";
			echo "x<sub>2</sub>=".$resp2."<br>";
		}
			elseif($disc==0){
				echo "x<sub>1</sub>=".$resp1."<br>";
			}else{
				echo "La ecuación tiene raíces imaginarias";
			}
	
	/*for ($i=1; $i <=12 ; $i++) { 
		echo $num." * ".$i." = ".$num*$i."<br>";
	}*/
	
?>
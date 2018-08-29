<?php
	if(isset($_GET["numero"]))
	{
		$num=$_GET["numero"];
	}
	else
		$num=0;
?>


<h1>Tablas de multiplicar</h1>
<form action="tabla3.php" method="get">
	<input type="number" name="numero" id="numero" value="<?php echo $num; ?>">
	<input type="submit" name="Obtener Tabla">
</form>

<?php
	if (isset($_GET["numero"]))
	{
		for ($i=1; $i <=12 ; $i++) { 
			echo $num." * ".$i." = ".$num*$i."<br>";
		}
	}

?>
<?php
$var = $_GET['opcion'];
if($var=="txt"){
echo "Columnas terminadas por:";
	echo "<select class'box'>";
	echo "<option id=','>,</option>";
	echo "<option id='.'>.</option>";
	echo "<option id='-'>-</option>";
	echo "<option id='_'>_</option>";
	echo "</select> <br/>";
echo "Filas terminadas por:";
	echo "<select class'box'>";
	echo "<option id='\n'>enter</option>";
	echo "<option id='-'>-</option>";
	echo "<option id='_'>_</option>";
	echo "<option id='.'>.</option>";
	echo "</select>";
}else{
	echo "no";
}
?>
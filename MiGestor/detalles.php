<?php
$var = $_GET['opcion'];
if($var=="txt" or $var=="csv"){
echo "Columnas terminadas por:";
	echo "<select class'box' id='cote'>";
	echo "<option id=','>,</option>";
	echo "<option id='.'>.</option>";
	echo "<option id='-'>-</option>";
	echo "<option id='_'>_</option>";
	echo "</select> <br/>";
echo "Filas terminadas por:";
	echo "<select class'box' id='fite'>";
	echo "<option id=','>,</option>";
	echo "<option id='-'>-</option>";
	echo "<option id='_'>_</option>";
	echo "<option id='.'>.</option>";
	echo "</select>";
}else{
	echo "Datos preparados para insertar";
}
?>
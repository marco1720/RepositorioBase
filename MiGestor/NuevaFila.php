<?php 
 $va=$_GET['numero'];
 $fin=21;
 if($va<$fin ){
 for($num=2;$num<=$va;$num++){
 		echo $num;
	 	echo "<br/>";
		echo "		<input type='text' align='middle' class='te' id='a".$num."' placeholder='valor' /> ";
		echo "		<select id='".$num."' class='box'>";
		echo "			<option value='0'>Tipo de dato</option>";
		echo "			<option value='id_us'>Identificador numerico</option>";
		echo "			<option value='nombre.nombre'>nombre</option>";
		echo "			<option value='ape.apelli'>apellido</option>";
		echo "			<option value='apm.apm'>segundo apellido</option>";
		echo "			<option value='nombre.sexo'>sexo</option>";
		echo "			<option value='cod.colonia'>colonia</option>";
		echo "			<option value='cod.municipio'>Municipio</option>";
		echo "			<option value='cod.estado'>Estado</option>";
		echo "			<option value='cod.cp'>CP</option>";
		echo "		</select><br/><br/>";
 }
 }else{
 	echo "Lo sentimos pero no puede rebasar un numero de 19 filas extra";
 }
?>
<?php 
 $va=$_GET['numero'];
 $fin=20;
 if($va<$fin ){
 for($num=1;$num<=$va;$num++){
 		echo $num;
	 	echo "<br/>";
		echo "		<input type='text' align='middle' class='te' placeholder='valor' /> ";
		echo "		<select id='".$num."' class='box' id='primero'>";
		echo "			<option id='0'>Tipo de dato</option>";
		echo "			<option id='nombre'>nombre</option>";
		echo "			<option id='ape_pat'>apellido</option>";
		echo "			<option id='ape_mat'>segundo apellido</option>";
		echo "			<option id='colonia'>colonia</option>";
		echo "			<option id='sexo'>sexo</option>";
		echo "			<option id='estado'>estado</option>";
		echo "		</select><br/><br/>";
 }
 }else{
 	echo "Lo sentimos pero no puede rebasar un numero de 19 filas extra";
 }
?>
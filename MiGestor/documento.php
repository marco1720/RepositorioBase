			<?php include 'conec.php';
			$sentencia=$_GET['sentencia'];
			$tipo=$_GET['opcion'];
			$filas=$_GET['regi'];
			$tab=$_GET['tab'];
			$fil=$_GET['fila'];
			$col=$_GET['col'];
			echo "Datos creados en descargas";
			if($tipo=='txt' OR  $tipo=='csv'){
			$query = ('select '.$sentencia.' from tabla,cod,nombre,ape,apm 
			WHERE
 
tabla.direccion=cod.id_cod

 and tabla.nombre=nombre.id_nombre and tabla.ape_pat=ape.id_ape  and tabla.ape_mat=apm.id_apm limit 0,'.$filas.'
 
 INTO OUTFILE
 
       "C:/Users/marco/Downloads/'.$tab.'.'.$tipo.'"
  
      FIELDS TERMINATED BY "'.$col.'"
    
    LINES TERMINATED BY "'.$fil.'";
    ');
			$mysqli->query($query);
			}else if($tipo=="sql"){
				$query = ('select "insert into '.$tab.' values (",'.$sentencia.' from tabla,cod,nombre,ape,apm 
			WHERE
 
tabla.direccion=cod.id_cod

 and tabla.nombre=nombre.id_nombre and tabla.ape_pat=ape.id_ape  and tabla.ape_mat=apm.id_apm limit 0,'.$filas.'
 
 INTO OUTFILE
 
       "C:/Users/marco/Downloads/'.$tab.'.'.$tipo.'"
  
      FIELDS TERMINATED BY ","
    
    LINES TERMINATED BY ");\n";
    ');
			$mysqli->query($query);
			}
			?>
<!DOCTYPE >
<html>
	<head><title>Base</title>
		
	<link href="estilos.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div>
			<ul id="menu">
			<li><a href="nuevabase.php">Crear Base</a></li>
			<li><a href="totalbases.php">Bases</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			</ul>
		</div><br /><br /><br />
		<div> <h1>Bases disponibles</h1> </div>
		<div>
			<?php include "conec.php";
	$mysqli->real_query("show databases; ");
	$query = $mysqli->store_result();
	?>
		<table border="1" width="400">
			<tr>
				<th>Bases de datos</th>
			</tr>
	<?php
		while ($row = $query->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $row['Database']?></td>
			</tr>
			<?php
		}
	$mysqli->close();
	?>
		</table>
		</div>
	</body>
</html>
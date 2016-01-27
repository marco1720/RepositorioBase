<!DOCTYPE >
<html>
	<head><title>Base</title>
		
	<link href="estilos.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript">
var xhr;
function validar(){
    if(window.ActiveXObject){
        xhr=new ActiveXObject("Microsoft.XMLHttp");
    }
    else if((window.XMLHttpRequest) || (typeof XMLHttpRequest)!==undefined){
        xhr=new XMLHttpRequest();
    }
    else{
        alert("Su navegador no soporta AJAX");
        return;
    }
    enviarpeticion();
}
    function enviarpeticion(){
    var numero=document.getElementById("numero").value;
    xhr.open("GET","NuevaFila.php?numero="+numero,true);
    xhr.onreadystatechange=verificaDetalle;
    
    xhr.send(null);
}
function verificaDetalle(){
    if(xhr.readyState===4){
        document.getElementById("chin").innerHTML=xhr.responseText;
    }
   
}
 function mostrar(){
	if(window.ActiveXObject){
        xhr=new ActiveXObject("Microsoft.XMLHttp");
    }
    else if((window.XMLHttpRequest) || (typeof XMLHttpRequest)!==undefined){
        xhr=new XMLHttpRequest();
    }
    else{
        alert("Su navegador no soporta AJAX");
        return;
    }
    enviar();
}
 function enviar () {
 		var opci="";
 	var radio=document.opciones.tipo;
if(radio[0].checked){
    opci="csv"
}else if(radio[1].checked){
    opci="txt"
}else if(radio[2].checked){
    opci="sql"
}else if (radio[3].checked){
    opci="html"
}
   alert (opci);
    xhr.open("GET","detalles.php?opcion="+opci,true);
    xhr.onreadystatechange=deta;
   
    xhr.send(null);
 }
 function deta(){
 	if(xhr.readyState===4){
        document.getElementById("de").innerHTML=xhr.responseText;
    }
 }
 
 function consultar(){
	if(window.ActiveXObject){
        xhr=new ActiveXObject("Microsoft.XMLHttp");
    }
    else if((window.XMLHttpRequest) || (typeof XMLHttpRequest)!==undefined){
        xhr=new XMLHttpRequest();
    }
    else{
        alert("Su navegador no soporta AJAX");
        return;
    }
    consul();
}
 function consul () {
 	var sentencia="";
 	var tempo=""; 
 	var r="";
 	var cuanto=document.getElementById('numero').value;
 	for (var i=1; i <= cuanto; i++) {
 	r =document.getElementById(i).value;
 	if( r!=""){
 		if(i==cuanto){
 	var tiempo=document.getElementById(i).value;
 	}else{
 	var tiempo=document.getElementById(i).value+",";	
 	}
 	sentencia=sentencia+tiempo;
 	}
 	}
 	alert(sentencia);
 	var fila="";
 	var col="";
 		var opci="";
 	var radio=document.opciones.tipo;
if(radio[0].checked){
    opci="csv"
    var fila=document.getElementById('fite').value;
 	var col=document.getElementById('cote').value;
}else if(radio[1].checked){
    opci="txt"
    var fila=document.getElementById('fite').value;
 	var col=document.getElementById('cote').value;
}else if(radio[2].checked){
    opci="sql"
}else if (radio[3].checked){
    opci="html"
}
   var reg = document.getElementById('reg').value;
   var tab = document.getElementById('tabli').value;
    xhr.open("GET","documento.php?opcion="+opci+"&&sentencia="+sentencia+"&&regi="+reg+"&&tab="+tab+"&&fila="+fila+"&&col="+col,true);
    xhr.onreadystatechange=dton;
   
    xhr.send(null);
 }
 function dton(){
 	if(xhr.readyState===4){
        document.getElementById("teb").innerHTML=xhr.responseText;
    }
 }
</script>
</head>
<body>
	<center>
	<div>
			<ul id="menu">
			<li><a href="nuevabase.php">Crear Base</a></li>
			<li><a href="totalbases.php">Bases</a></li>
			<li><a href="eje.html">1</a></li>
			<li><a href="#">2</a></li>
			</ul>
		</div>
		<br /><br /><br />
		</div>
		Nombre del conjunto de datos <input type="text" value="data" id="tabli" /><br/><br/>
		Numero de columnas <input type="text" value="1" id="numero" /><input type="button" value="Agregar" onclick="validar();">
		</div>
		<div align="left">
			
				1<br>
				<input type="text" id="a1" class="te" placeholder="valor" />
				<select id="1" class="box" align="middle">
					<option value="0">Tipo de dato</option>
					<option value="id_us">Identificador numerico</option>
					<option value="nombre.nombre">nombre</option>
					<option value="ape.apelli">apellido</option>
					<option value="apm.apm">segundo apellido</option>
					<option value="nombre.sexo">sexo</option>
					<option value="cod.colonia">colonia</option>
					<option value="cod.municipio">Municipio</option>
					<option value="cod.estado">Estado</option>
					<option value="cod.cp">CP</option>
				</select> <br /><br />
				<div id="chin"></div>
				<div><form name="opciones">
					<input type="radio" name="tipo" id="01"value="" onclick="mostrar();" />CSV
					<input type="radio" name="tipo" id="02" value="" onclick="mostrar();" />TXT
					<input type="radio" name="tipo" id="03" value="" onclick="mostrar();" />SQL
					<input type="radio" name="tipo" id="04" value="" onclick="mostrar();" />HTML
					 </form>
					 <div>
					 	<div id="de" align="left">
					 	</div>
					 	<div aling='left'>
					 		Numero de registros<br /> <input type="text" class="box" value="100" id='reg' />
					 		<input type="button" class="box" value="Crear" onclick="consultar();" />
					 	</div>
				<br />
				<div id='teb'></div>
<div>
	</center>
	</body>
</html>
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
		Numero de columnas <input type="text" value="1" id="numero" /><input type="button" value="Agregar" onclick="validar();">
		</div>
		<div align="left">
			
				0<br>
				<input type="text" id="a0" class="te" placeholder="valor" />
				<select id="0" class="box" align="middle">
					<option id="0">Tipo de dato</option>
					<option id="nombre">nombre</option>
					<option id="ape_pat">apellido</option>
					<option id="ape_mat">segundo apellido</option>
					<option id="colonia">colonia</option>
					<option id="sexo">sexo</option>
					<option id="estado">estado</option>
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
				<br />
<div>
	</center>
	</body>
</html>
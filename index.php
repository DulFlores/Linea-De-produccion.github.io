<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>LINEA DE RPODUCCION </title>
</head>
<body>
	
<div><h1 class="centrar">LINEA DE PRODUCCION DE UNA CASA</h1></div>

<h2 class="ali">INTRODUCCION</h2>

<img width="500" id="img1" src="casa11.jpg" ><p class="cua">  <br> <br> <br>  Las lineas de produccion nos dan la facilidad para ejecutar innumerables tareas en la industria. Han evolucionado para optimizar los procesos, lo cual este permite disminuir errores y mejorar la calidad final del producto, sabemos que las lineas de produccion son un grupo de operaciones en secuencia, donde se ensamblan componentes para hacer un producto terminado. De igual manera se  refiere a los materiales que pasan por un proceso de transformacion,.</p>

<br>

	<div class="construccion"></div>
	<div>
		<img width="400" id="img2" src="casa4.jpg">
		<h2 style="text-align: center;">Elaboracion de casas</h2>
	</div>
	<div >
		<h2 class="pe">
	<ul class="centrar_lista" > 
		<li>1 -Seleccionar terreno .</li>
		<li>2 -Pedir permisos .</li>
		<li>3 -Colocar castillos.</li>
		<li>4 -construir Paredes .</li>
		<li>5 -Colocar castillos.</li>
		<li>6 -Instalaciones.</li>
		<li>7 -Repillados externos.</li>
		<li>8 -Acabados generales.</li>

	</ul>
	</h2>
	</div>
<br> <br> <br> <br> <br> <br> 
<h2 class="centrar2" class="ali2">LINEA DE PRODUCCION</h2>
<div style="text-align: center;"><img width="700" id="img3" src="Lin_Pro.jpg"></div>

<h2 class="centrar2" class="ali2">LINEA DE PRODUCCION CON CONCURENCIAS</h2>
<div style="text-align: center;"><img width="700" id="img3" src="concurrencias.jpg"></div>

<h2 style="text-align: center; class="ali2">CODIGO DLV</h2>
<center>
	    <form><input type="button" onclick="mostrar('contenido3')" value="EJECUTAR"></form>
 <?php
$out = shell_exec('"C:\dlv.exe" "C:\casa3.plan" -FP -N=45');
     echo '<pre> $out</pre>';
?>
<textarea class="estilotextarea" cols="95" rows="30"  class="oculto" id="contenido3" ><?php echo $out?></textarea>
  

    </center>

</body>
</html>
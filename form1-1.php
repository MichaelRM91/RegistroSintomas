<?php
header("Content-Type: text/html;charset=utf-8");
session_start();
foreach ($_POST as $clave => $valor) {
$_SESSION['sesionform1'][$clave] = $valor;
}
?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Ingreso Centronet</title>
<link rel="stylesheet"  type="text/css" media="screen" href="css/estilos.css" />
<link  rel="icon"   href="img/favicons.png" type="image/png" />
<style type="text/css">
body{
	background-image:url(img/pregunta7.jpg);
	width: 100%;
	position: absolute; 
	z-index: -1;
	top: 750; 
	left:0;
	background-size: cover;
	color:#323232;;
}
</style>
</head>
<body>
<div class="container">

<form action="form2.php" method="post" accept-charset="utf-8">
<!--<h3 class="heading"   ><label>¿QUE AREA PERTENECE? :</label></h3>-->
   <p>
   <input class="botonm8" type="submit" name="area" value="ADMINISTRATIVO">
    <input class="botonm8" type="submit" name="area" value="COMERCIAL"><br><br></p>
	<p>
	<input class="botonm8"  type="submit" name="area" value="CONTABILIDAD">
    <input class="botonm8" type="submit" name="area" value="GESTION HUMANA"><br><br></p>
	<p>
	 <input class="botonm8" type="submit" name="area" value="GERENCIA">
   <input class="botonm8" type="submit" name="area" value="LOGISTICA"><br><br></p>
   <p>
    <input class="botonm8" type="submit" name="area" value="OPERACIONES">
	 <input class="botonm8" type="submit" name="area" value="IN HOUSE TQ"><br><br></p>
	 <p>
	   <input class="botonm8" type="submit" name="area" value="CID">
	   <input class="botonm8" type="submit" name="area" value="FINANCIERO"><br><br></p>
	 <p>
	    <input class="botonm8" type="submit" name="area" value="EXTERNO">
  
</form>
</div>
</div>
</body>
</html>
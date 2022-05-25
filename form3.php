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
	background-image:url(img/pregunta2.jpg);
	width: 100%;
	position: absolute; 
	z-index: -1;
	top: 0; 
	left:0;
	background-size: cover;
	color:#323232;;
}
</style>
</head>
<body>
<div class="container">
<div class="mainb">
<form action="form4.php" method="post" accept-charset="utf-8">
<!--<h3 class="heading"   ><label>¿DURANTE LA SEMAN A TENIDO FIEBRE, TOS, DIFICULTAD PARA RESPIRAR? :</label></h3>-->
   <p>
    <input class="botonr2" type="submit" name="sintomas" value="Sí">
    <input class="botonr2" type="submit" name="sintomas" value="No">
  </p>
</form>
</div>
</div>
</body>
</html>
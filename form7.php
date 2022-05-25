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
	background-image:url(img/pregunta6.jpg);
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

<form action="form8.php" method="post" accept-charset="utf-8">
<!--<h3 class="heading"   ><label>¿MEDIO DE TRANSPORTE QUE UTILIZA? :</label></h3>-->
  <p>
   <p> <input class="botonm7" type="submit" name="transporte" value="CAMINANDO"></p><br>
   <p> <input class="botonm7" type="submit" name="transporte" value="BICICLETA"></p><br>
	 <p><input class="botonm7"  type="submit" name="transporte" value="MOTO"></p><br>
   <p> <input class="botonm7" type="submit" name="transporte" value="CARRO"></p><br>
	<p> <input class="botonm7" type="submit" name="transporte" value="BUS"></p><br>
   <p> <input class="botonm7" type="submit" name="transporte" value="TAXI"></p><br>
  </p>
</form>
</div>
</div>
</body>
</html>
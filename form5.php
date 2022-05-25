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
	background-image:url(img/pregunta4.jpg);
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
<form action="form6.php" method="post" accept-charset="utf-8">
<!--<h3 class="heading"   ><label>¿LE HAN DIAGNOSTICADO UNA O VARIAS DE ESTAS ENFERMEDADES? :</label>
 <p>- INSUFICIENCIA CARDÍACA</p>
 <p>- INFARTO DE MIOCARDIO</p>
 <p>- CARDIOPATIA CONGENITA</p>
 <p>- HIPERTENSION PULMONAR</p>
 <p>- ACCIDENTE CEREBRO VASCULAR</p></h3>-->
   <p>
    <input class="botonr5" type="submit" name="predisposicion" value="Sí">
    <input class="botonr5" type="submit" name="predisposicion" value="No">
  </p>
</form>
</div>
</div>
</body>
</html>
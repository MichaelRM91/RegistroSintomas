<?php
header("Content-Type: text/html;charset=utf-8");
session_start();
foreach ($_POST as $clave => $valor) {
$_SESSION['sesionform1'][$clave] = $valor;
}
// echo '<b>Datos form1</b>';
// $sesionform1=$_SESSION['sesionform1'];
// echo '<pre>';
// print_r($sesionform1);
// echo '</pre>';
?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Ingreso Centronet</title>
<link rel="stylesheet"  type="text/css" media="screen" href="css/estilos.css" />
<link  rel="icon"   href="img/favicons.png" type="image/png" />
 <script src="jquery/jquery-3.3.1.min.js"></script>
<style type="text/css">
body{
	background-image:url(img/pregunta1.jpg);
	width: 100%;
	position: absolute; 
	z-index: -1;
	top: 0; 
	left:0;
	background-size: cover;
	color:#323232;;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
    $("form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $("form").keypress(function(e) {
        if (e.which == 9) {
            return false;
        }
    });
});
</script>
</head>
<body>
<div class="container">
<div class="mainb">
<form action="form3.php" method="post" accept-charset="utf-8">
<!-- <h3 class="heading"   ><label>¿PERTENECE A ALGUN TIPO DE RIESGO?</label>
 <p>- 60 AÑOS</p>
 <p>- HIPERTENSION</p>
 <p>- DIABETES</p>
 <p>- CARDIOPATÍAS</p>
 <p>- ENFERMEDAD RENAL CRONICA</p>
 <p>- INMUNO SUPRESIÓN</p>
 <p>- PATOLOGIA HEPÁTICA</p>
  <p></h3> -->
    <input class="botonr" type="submit" name="riesgos" value="Sí">
    <input class="botonr" type="submit" name="riesgos" value="No">
  </p>
</form>
</div>
</div>
</body>
</html>
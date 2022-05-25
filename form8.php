<?php 
header("Content-Type: text/html;charset=utf-8");
error_reporting(0);
session_start();
foreach ($_POST as $clave => $valor) {
$_SESSION['sesionform1'][$clave] = $valor;
}
// echo '<b>Datos form1</b>';
// $sesionform1=$_SESSION['sesionform1'];
// echo '<pre>';
// print_r($sesionform1);
// echo '</pre>';

$servername = "localhost";
$database = "empresa";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn,"SET NAMES 'utf8'");
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
//echo "Connected successfully";
 extract($_SESSION['sesionform1']);
$sql = "INSERT INTO ingresos(cedula, apellido1, apellido2, nombre1, nombre2, sexo, nacimiento, sangre, riesgos, sintomas, peso, predisposicion, fuma, transporte, area) VALUES ('$cedula','$apellido1','$apellido2','$nombre1','$nombre2', '$sexo','$nacimiento','$sangre','$riesgos','$sintomas','$peso','$predisposicion','$fuma','$transporte','$area')";
if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

 
?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Ingreso Centronet</title>
<link rel="stylesheet"  type="text/css" media="screen" href="css/estilos.css" />
<link  rel="icon"   href="img/favicons.png" type="image/png" />
<style type="text/css">
body{
	background-image:url(img/fondo1.jpg);
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
<meta http-equiv="refresh" content="5;url=index.html">

<div class="mainf">
<div align="center">
<!--<h1 class="heading"   >--><FONT SIZE=50><label>"<?php if($sintomas == "Sí") {

echo 'POR FAVOR COMUNIQUESE CON SU JEFE O RECURSOS HUMANOS';

} else {

echo ' ¡GRACIAS! ';

}  ?>"</label></FONT>

<?

unset($_SESSION['sesionform1']);
}
?>
</div>
</div>
</div>
</body>
</html>
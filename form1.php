<html>
<head>
<title>Ingreso Centronet</title>
<link rel="stylesheet"  type="text/css" media="screen" href="css/estilos.css" />
<link  rel="icon"   href="img/favicons.png" type="image/png" />
 <script src="jquery/jquery-3.3.1.min.js"></script>
<style type="text/css">
body{
	background-image:url(img/fondo1.jpg);
	width: 100%;
	height: 1920px;
	position: absolute; 
	z-index: -1;
	top: 0; 
	left:0;
	background-size: cover;
	  background-repeat: no-repeat;
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

function mayus(e) {
    e.value = e.value.toUpperCase();
}
</script>
</head>


 
  


<body>
<div class="container">
<div class="main">
<!-- <h1 class="heading" style="text-align: center; margin: -19px 0 0;" > -->
<FONT SIZE=7>PASA EL CODIGO DE BARRAS DE LA CEDULA POR EL LECTOR O DIGITA MANUAL LOS CAMPOS </FONT><!-- </h1> -->
<br>
<br>

<form action="form1-1.php" method="post" accept-charset="utf-8">
<!-- <label>DOCUMENTO IDENTIDAD :</label> --><br>
<input autofocus  class="controls" name="cedula" type="number" placeholder="Cedula de Ciudadania" pattern="[0-9]{2,20}" autocomplete="off" required autofocus   ><br>
<!-- <label>PRIMER APELLIDO :</label> --><br>
<input class="controls" name="apellido1" onkeyup="mayus(this);"  type="text" placeholder="Primer Apellido" pattern="^[a-zA-Z\u00F1\u00D1]+$" autocomplete="off" required><br>
<!-- <label>SEGUNDO APELLIDO :</label> --> <br> 
<input class="controls" name="apellido2" onkeyup="mayus(this);"  type="text" placeholder="Segundo Apellido" pattern="^[a-zA-Z\u00F1\u00D1]+$" autocomplete="off" ><br>
<!-- <label>PRIMER NOMBRE :</label> --><br>
<input class="controls" name="nombre1" onkeyup="mayus(this);"  type="text" placeholder="Primer Nombre" pattern="^[a-zA-Z\u00F1\u00D1]+$" autocomplete="off" required><br>
<!-- <label>SEGUNDO NOMBRE  :</label> --><br>
<input class="controls" name="nombre2" onkeyup="mayus(this);"  type="text" placeholder="Segundo Nombre" pattern="^[a-zA-Z\u00F1\u00D1]+$" autocomplete="off"><br>
<!-- <label>SEXO :</label> --><br>
<select class="controls" name="sexo" id="sexo" required >
    <option value="" disabled selected>Selecciona sexo </option>
    <option value="F">F</option>
    <option value="M">M</option>  
</select><br>
<!-- <label>FECHA NACIMIENTO  :</label> --><br>
<input class="controls" name="nacimiento" type="date" placeholder="dd-mm-aaaa" required><br>
<!-- <label>TIPO DE SANGRE :</label> --><br>
<select class="controls" name="sangre" id="sangre"  required >
<option disabled selected value="">Selecciona tipo de sangre </option>
  <option value="O-">O-</option>
  <option value="O+" >O+</option>
  <option value="A-">A-</option>
  <option value="A+">A+</option>
  <option value="B-">B-</option>
  <option value="B+">B+</option>
  <option value="AB-">AB-</option>
  <option value="AB+">AB+</option>
</select><br>
<input class="botons" type="submit" value="SIGUIENTE" />
</form>
</div>
</div>
</body>
</html>
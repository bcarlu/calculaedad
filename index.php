<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calcula tu edad</title>
</head>
<body>
	<form action="" method="post">
		<p>
            <label>
            Fecha de Nacimiento
            <input type="date"
            name="fecha_nacimiento"
            placeholder="Fecha de
            Nacimiento">
            </label>
        </p>
        <p class="submit">
            <input type="submit" value="Calcular">
        </p>
	</form>

<?php 

if(isset($_POST)){

$fnacimiento = (int)substr($_POST['fecha_nacimiento'],0,4);
//echo $_POST['fecha_nacimiento'] . "<br>";
$factual = (int)date('Y');
$edad = $factual - $fnacimiento;

echo $edad;    
}


?>
</body>
</html>
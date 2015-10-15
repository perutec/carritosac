<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Kilometraje</title>
<?php include('../header.php'); 

include('../include/Clases/Kilometraje.php');
$kilometraje = new Kilometraje();

?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="list-group">
<a href="#" class="list-group-item active">CALCULAR RENDIMIENTO DE GASOLINA</a>
<?php include('../consulta/Kilometraje.php'); ?>
</div>
</div>
</div>
</div>
</body>
</html>
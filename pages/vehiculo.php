<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Vehiculo</title>
<?php include('../header.php'); ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-3">

<div class="list-group">
<a href="#" class="list-group-item active">REGISTRO DE VEHICULOS</a>

<div class="list-group-item">

<form action="../registro/Vehiculo.php" method="POST">

<label for="">MARCA</label>
<input type="text" name="marca"  class="form-control" required   onchange="conMayusculas(this);">
<label for="">AÑO DE FABRICACIÓN</label>
<input type="number" name="aniofab"  class="form-control" required onchange="conMayusculas(this);">
<label for="">N° DE PUERTAS</label>
<input type="number" name="puertas"  class="form-control" required onchange="conMayusculas(this);">
<label for="">COLOR</label>
<input type="text" name="color"  class="form-control" required   onchange="conMayusculas(this);">
<label for="">PLACA</label>
<input type="text" name="placa"  class="form-control" required onchange="conMayusculas(this);">
<label for="">TIPO</label>
<input type="text" name="tipo"  class="form-control" required onchange="conMayusculas(this);">
<label for="">KILOMETRAJE</label>
<input type="number" name="kminicial"  class="form-control" required onchange="conMayusculas(this);"> 
<input type="hidden" name="registro" value="insertar">
<br>
<button class="btn btn-primary">REGISTRAR</button>

</form>

</div>



</div>


</div>


<div class="col-md-9">
<div class="list-group">
<a href="#" class="list-group-item active">LISTA  DE VEHICULOS</a>
<?php include('../consulta/Vehiculo.php'); ?>
</div>
</div>

</div>
</div>	
</body>
</html>
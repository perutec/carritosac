<div class="table-responsive">
<table class="table table-bordered table-condensed" 
id="articulo">
<?php 
error_reporting(0);//desactivar  warning  php;

require_once('../include/bd/conexion.php');
$db = new Conexion();
$query = "SELECT * FROM vehiculo";
$result = $db->query($query);
$numfilas = $result->num_rows;
?>
<thead>
<tr>
<th>ID</th>
<th>MARCA</th>
<th>AÑO FAB.</th>
<th>N° PUERTAS</th>
<th>COLOR</th>
<th>PLACA</th>
<th>TIPO</th>
<th>KILOMETRAJE</th>
<td style="text-align: center"><i class="glyphicon glyphicon-edit text-primary"></i></td>
<td><i class="glyphicon glyphicon-trash text-danger"></i></td>
</tr>
</thead>
<tbody>
<?php
for ($x=0;$x<$numfilas;$x++) {
$fila = $result->fetch_object();
?>
<tr class="active">
<?php 
$txta="";
$txtxa="";
$txta ='modal-containera-';
$txtxa='#modal-containera-';
$txta .=$j;
$txtxa=$txtxa.=$j;
?>
<td><?php echo $fila->idvehiculo                     ?></td>
<td><?php echo $fila->marca                          ?></td>
<td><?php echo $fila->anio_fabricacion               ?></td>
<td><?php echo $fila->num_puertas                    ?></td>
<td><?php echo $fila->color                          ?></td>
<td><?php echo $fila->placa                          ?></td>
<td><?php echo $fila->tipo                           ?></td>
<td><?php echo round($fila->kminicial,2)             ?></td>
<td style="text-align: center"class="text-primary">
<a id="modal-899574" href='<?php echo $txtxa;?>'
role="button" class="btn" data-toggle="modal">
<i class="glyphicon glyphicon-edit text-primary"></i>
</a>
</td>

<td><a href="../registro/Vehiculo.php?id=<?php echo $fila->idvehiculo;?>&registro=eliminar">
<i class="glyphicon glyphicon-trash text-danger"></i></a></td>


<!-- INICIO  MODAL -->
<div class="modal fade" id="<?php echo $txta;?>" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="modal-title text-primary" id="myModalLabel">
ACTUALIZAR  DATOS DEL VEHICULO
</h4>
</div>

<form action="../registro/Vehiculo.php" method="POST">
<div class="modal-body">

<input type="hidden" name="idvehiculo" value="<?php echo $fila->idvehiculo; ?>">
<label for="">MARCA</label>
<input type="text" name="marca" id="" class="form-control"   value="<?php echo $fila->marca; ?>"
 onchange="conMayusculas(this);">
<label for="">AÑO DE FABRICACIÓN</label>
<input type="number" name="aniofab" id="" class="form-control"   value="<?php echo $fila->anio_fabricacion; ?>">
<label for="">NÚMERO DE PUERTAS</label>
<input type="number" name="puertas" id="" class="form-control"   value="<?php echo $fila->num_puertas; ?>">
<label for="">COLOR</label>
<input type="text" name="color" id="" class="form-control"   value="<?php echo $fila->color; ?>" 
onchange="conMayusculas(this);">
<label for="">PLACA</label>
<input type="text" name="placa" id="" class="form-control"   value="<?php echo $fila->placa; ?>" 
onchange="conMayusculas(this);">
<label for="">TIPO</label>
<input type="text" name="tipo" id="" class="form-control"   value="<?php echo $fila->tipo; ?>"
onchange="conMayusculas(this);">
<label for="">KILOMETRAJE</label>
<input type="number" name="kminicial" id="" class="form-control"  
 value="<?php echo round($fila->kminicial,2); ?>">

<input type="hidden" name="registro" value="actualizar" >
</div>

<div class="modal-footer">
<button  type="submit" class="btn btn-primary">ACTUALIZAR</button>
</div>

</form>

</div>

</div>

</div>

<!-- FIN  MODAL -->

</tr>

<?php 
$j=$j+1;
}
?>
<tbody>
</table>
</div>
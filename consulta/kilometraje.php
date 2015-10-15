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
<th>KM RECORRIDO</th>
<th>CANT. GASOLINA</th>
<th>RENDIMIENTO</th>
<td style="text-align: center"><i class="glyphicon glyphicon-scale text-success"></i></td>
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
<td><?php echo round($fila->kmrecorrido,2)             ?></td>
<td><?php echo round($fila->cant_gasolina,2)             ?></td>
<td><?php echo $kilometraje->Rendimiento($fila->kminicial,$fila->kmrecorrido,$fila->cant_gasolina); ?></td>
<td style="text-align: center"class="text-success">
<a id="modal-899574" href='<?php echo $txtxa;?>'
role="button" class="btn" data-toggle="modal">
<i class="glyphicon glyphicon-scale text-success"></i>
</a>
</td>


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

<label for="">KILOMETRAJE</label>
<input type="number" name="kminicial" id="" class="form-control"  
value="<?php echo round($fila->kminicial,2); ?>">
<label for="">KM RECORRIDO</label>
<input type="number" name="kmrecorrido" id="" class="form-control"  
value="<?php echo round($fila->kmrecorrido,2); ?>">
<label for="">GASOLINA</label>
<input type="number" name="gasolina" id="" class="form-control" >

<input type="hidden" name="registro" value="kilometraje" >
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
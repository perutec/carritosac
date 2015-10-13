<?php 

include('../include/bd/conexion.php');
include('../include/Clases/Vehiculo.php');


if ($_REQUEST['registro']=='insertar')
 {
 $vehiculo  = new Vehiculo('?',$_POST['marca'],$_POST['aniofab'],$_POST['puertas'],$_POST['color'],
$_POST['placa'],$_POST['tipo'],$_POST['kminicial'],'?','?');
  $vehiculo->Registrar();
 }
else if ($_REQUEST['registro']=='actualizar') 
{
$vehiculo  = new Vehiculo($_POST['idvehiculo'],$_POST['marca'],$_POST['aniofab'],$_POST['puertas'],$_POST['color'],
$_POST['placa'],$_POST['tipo'],$_POST['kminicial'],'?','?');
 $vehiculo->Actualizar();
}
else if ($_REQUEST['registro']=='eliminar') 
{
 $vehiculo  = new Vehiculo($_GET['id'],'?','?','?','?','?','?','?','?','?');
 $vehiculo->Eliminar();
}
else
{
header('Location: /carritosac/pages/vehiculo.php');
}



 ?>
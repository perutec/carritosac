<?php 

/**
* 
*/
class Vehiculo
{

protected $idvehiculo;
protected $marca;
protected $anio_fabricacion;
protected $num_puertas;
protected $color;
protected $placa;
protected $tipo;
protected $kminicial;
protected $kmrecorrido;
protected $cant_gasolina;


function __construct($idvehiculo,$marca,$anio_fabricacion,$num_puertas,$color,
	$placa,$tipo,$kminicial,$kmrecorrido,$cant_gasolina)
{
$this->idvehiculo       = $idvehiculo;
$this->marca            = $marca;
$this->anio_fabricacion = $anio_fabricacion;
$this->num_puertas      = $num_puertas;
$this->color            = $color;
$this->placa            = $placa;
$this->tipo             = $tipo;
$this->kminicial        = $kminicial;
$this->kmrecorrido      = $kmrecorrido;
$this->cant_gasolina    = $cant_gasolina;

}



public function Registrar()
{
$db = new Conexion();

$query = "SELECT * FROM vehiculo where idvehiculo='$this->idvehiculo'";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;

if ($numfilas>0) 
{
echo "<script>
alert('EL VEHICULO $this->idvehiculo YA ESTA REGISTRADO');
window.location='/carritosac/pages/vehiculo.php';
</script>";
}

else {

$query = "INSERT INTO vehiculo(marca,anio_fabricacion,num_puertas,color,placa,tipo,kminicial)
values('$this->marca','$this->anio_fabricacion','$this->num_puertas','$this->color',
	   '$this->placa','$this->tipo','$this->kminicial');";
$result = $db->query($query);

if ($result)
echo "<script>
alert('EL VEHICULO FUE REGISTRADO CORRECTAMENTE.');
window.location='/carritosac/pages/vehiculo.php';
</script>";
else
echo "<script>
alert('HA OCURRIDO UN ERROR AL MOMENTO DE INSERTAR EL VEHICULO');
window.location='/carritosac/pages/vehiculo.php';
</script>";

$db->close();

}



}



public function Eliminar()
{
$db = new Conexion();
$sql= $db->query("DELETE  FROM  vehiculo WHERE idvehiculo='$this->idvehiculo';");
echo "<script>alert('VEHICULO ELIMINADO');
       window.location='/carritosac/pages/vehiculo.php';
      </script>";

}


public function Actualizar()
{
$db = new Conexion();
$sql= $db->query("UPDATE  vehiculo  SET marca='$this->marca',
anio_fabricacion='$this->anio_fabricacion',num_puertas='$this->num_puertas',
color='$this->color',placa='$this->placa',tipo='$this->tipo',kminicial='$this->kminicial'
 WHERE idvehiculo='$this->idvehiculo';");
echo "<script>alert('VEHICULO  ACTUALIZADO');	
       window.location='/carritosac/pages/vehiculo.php';
      </script>";
}

}




?>
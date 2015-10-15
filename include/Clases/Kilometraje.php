<?php 

/**
* 
*/
class Kilometraje 
{


  function Rendimiento($kminicial,$kmrecorrido,$gasolina){
      return 'El rendimiento de su vehículo en este período de tiempo y recorrido fue  '.round((($kminicial+ $kmrecorrido)- $kminicial)/ $gasolina,3).' Km/l';
    }

}



?>
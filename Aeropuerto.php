<?php
/**
 * Se registra la siguiente información: denominación, dirección y la colección de aerolíneas que arriban a el
 */
class Aeropuerto{
   //Atributos - Variables Instancias
   private $denominacion;
   private $direccion;
   private $colAerolineas=[];// Array de coleccion de aerolineas
   //Metodo Constructor
   public function __construct($denominacion,$direccion,$colAerolineas){
       $this->denominacion = $denominacion;
       $this->direccion = $direccion;
       $this->$colAerolineas = $colAerolineas;
   }
   //Metodo Getter - Observadoras
   public function getDenominacion(){
    return $this->denominacion;
   }
   public function getDireccion(){
    return $this->direccion;
   }
   public function getColAerolineas(){
    return $this->colAerolineas;
   }
   //Metodo Setter - Modificadoras
   public function setDenominacion($nuevaDenominacion){
    $this->denominacion = $nuevaDenominacion;
   }
   public function setDireccion($nuevaDireccion){
    $this->direccion = $nuevaDireccion;
   }
   public function setColAerolineas($nuevaColAerolineas){
    $this->colAerolineas= $nuevaColAerolineas;
   }
   //Metodo __toString()-> retorna cadena de caracteres
   public function __toString(){
     return "Denominacion: ".$this->getDenominacion()."\n". "Direccion: ".$this->getDireccion()."\n". "Coleccion Aerolineas: ". $this->getColAerolineas()."\n";
}
//Metodos a aplicar
//Implementar el método retornarVuelosAerolinea que recibe por parámetro una aerolínea y retorna todos los vuelos asignados a esa aerolínea
public function retornarVuelosAerolinea ($aerolinea){
      $vuelosAsignados = false;
      foreach ( $this->colAerolineas as $unaAerolinea){
        if($unaAerolinea == $aerolinea){
             $unaAerolinea->getColAerolineas(); //Retorna todos los vuelos
             $vuelosAsignados = true;
        }
      }
      return $vuelosAsignados;
}
//Implementar el método ventaAutomatica que recibe por parámetro la cantidad de asientos, una fecha y un destino y el aeropuerto realiza automáticamente la asignación al vuelo. Para la implementación de este método debe utilizarse uno de los métodos implementados en la clase Vuelo. 
public function ventaAutomatica($cantAsiento,$fecha,$destino,$aeropuerto){
     $asignacionVuelo = null;
     $coleccionAerolineas = $this->getColAerolineas();

     foreach ($coleccionAerolineas as $aerolinea){
        $objVuelo = $aerolinea->venderVueloADestino($cantAsiento,$destino,$fecha);
        if($objVuelo != $asignacionVuelo){
            $asignacionVuelo = $objVuelo;
        }
         
     }
     return $asignacionVuelo;
}
//Implementar en la clase Aeropuerto el método promedioRecaudadoXAerolinea,  que recibe por parámetro la identificación de una Aerolínea y retorna el promedio de lo recaudado por esa Aerolínea en ese Aeropuerto.Para la implementación utilizar, si es posible, alguno de los métodos previamente implementado.
public function promedioRecaudadoXAerolinea($identificacion){
    $promedio = 0;
    $colVuelosAerolinea = $this->getColAerolineas();
    $cant_vuelos = count($colVuelosAerolinea);
    if($cant_vuelos > 0){
        foreach ($colVuelosAerolinea as $unObjVuelo){
            $importe = $unObjVuelo->getImporte();
            $asientosVendidos = $unObjVuelo->getCantATotales() - $unObjVuelo->getCantADisponibles();
            $importe_vuelo = $importe * $asientosVendidos;
        }
        $promedio = $importe_vuelo / $cant_vuelos ;
    }
    return $promedio;
}
}

?>
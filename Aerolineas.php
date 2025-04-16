<?php
/**
 * En la clase Aerolíneas se registra la siguiente información: identificación, nombre y la colección de vuelos programados
 */
class Aerolineas{
    //Atributos - Variables Instancias
    private $identificacion;
    private $nombre;
    private $coleccionVuelosProg = []; //Coleccion de vuelos programados.
    //Metodo Constructor
    public function __construct($identificacion,$nombre,$coleccionVuelosProg=[]){
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->coleccionVuelosProg = $coleccionVuelosProg;
    }
    //Metodos Getters - Observadoras
    public function getIdentificacion(){
        return $this->identificacion;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getColeccionVuelos(){
        return $this->coleccionVuelosProg;
    }
    //Metodos Setter - Modificadoras
    public function setIdentificacion ($nuevaIdentificacion){
        $this->identificacion = $nuevaIdentificacion;
    }
    public function setNombre ($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    public function setColeccionVuelos ($nuevaColVuelos){
       $this->coleccionVuelosProg = $nuevaColVuelos;
    }
    //Metodo __toString()-> Retorna una cadena de caracteres
    public function __toString():string{
        $cadena = "Identificacion:". $this->getIdentificacion()."\n";
        $cadena = $cadena. "Nombre: ".$this->getNombre()."\n";
        $cadena = $cadena. "Coleccion Vuelos: ".$this->getColeccionVuelos()."\n";
        return $cadena;
    }
    //Metodos a resolver
    //Se debe implementar el método  darVueloADestino que recibe por parámetro un destino junto a una cantidad de asientos libres y se debe retornar una colección con los vuelos disponibles a ese destino
    public function darVueloADestino($destino,$cantAsiento){
        $colVuelos = array();
        $coleccionVuelos = $this->getColeccionVuelos();
        foreach ($coleccionVuelos as $obj_vuelo){
            $elDestino = $obj_vuelo->getDestino();
            $cant_disponibles = $obj_vuelo->cantADisponibles();
            if($elDestino == $destino && $cant_disponibles >= $cantAsiento){
                $colVuelos[] = $obj_vuelo;
            }
        }
        return $colVuelos;
    }
    //Implementar en la clase Aerolinea el método incorporarVuelo que recibe como parámetro un vuelo, verifica que no se encuentre registrado ningún otro vuelo al mismo destino, en la misma fecha y con el mismo horario de partida.El método debe retornar verdadero si la incorporación del vuelo se realizó correctamente y falso en caso contrario.
    public function incorporarVuelo ($objVuelo){
        $incorporacionVuelo = true;
        $colVuelos = $this->getColeccionVuelos();
        $nfecha = $objVuelo->getFecha();
        $nHoraPartida = $objVuelo->getHoraPartida();
        $nDestino = $objVuelo->getDestino();
        foreach ($colVuelos as $vueloProgramado){
             if ( $vueloProgramado->getDestino()== $nDestino && $vueloProgramado->getFecha()== $nfecha && $vueloProgramado == $nHoraPartida){
                $incorporacionVuelo = false;
             }
        }
        return $incorporacionVuelo;
    }
    //Implemente en la clase Aerolinea  el método venderVueloADestino, que recibe por parámetro: la cantidad de asientos, el destino y una fecha. El método realiza la venta con el primer vuelo encontrado a ese destino, con los asientos disponibles y en la fecha deseada. En la implementación debe invocar al método asignarAsientosDisponibles y retornar la instancia del vuelo asignado o null en caso contrario
    public function venderVueloADestino($cantidadAsiento,$destino,$fecha){
        $instanciaVuelo = null;
        $colVuelosEncontrados = $this->getColeccionVuelos();
        foreach ($colVuelosEncontrados as $vuelo){
            if ($vuelo->getDestino() == $destino && $vuelo->getFecha() == $fecha && $vuelo->getCantADisponibles()>= $cantidadAsiento){
                      $vuelo->asignarAsientoDisponibles();
                      $instanciaVuelo = $vuelo;
                      
            }
        }
        return $instanciaVuelo;
    }
}
?>
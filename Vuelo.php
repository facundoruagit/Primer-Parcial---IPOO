<?php
/**
 * En la clase Vuelo:Se registra la siguiente información: número, importe, fecha, destino, hora arribo, hora partida, cantidad asientos totales y disponibles, y una referencia a la persona responsable del vuelo. Se cuenta con la implementación de:
 * un Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la clase.los métodos de acceso de cada uno de los atributos de la clase.
 */
class Vuelo{
    //Atributos - Variables Instancias
    private $numero;
    private $importe;
    private $fecha;
    private $destino;
    private $horaArribo;
    private $horaPartida;
    private $cantAsientosTotales;
    private $cantAsientosDisponibles;
    private Persona $persona;
    //Metodo Constructor
    public function __construct($numero,$importe,$fecha,$destino,$horaArribo,$horaPartida,$cantAsientosTotales,$cantAsientosDisponibles, Persona $persona){
        $this->numero = $numero;
        $this->importe = $importe;
        $this->fecha = $fecha;
        $this->destino = $destino;
        $this->horaArribo = $horaArribo;
        $this->horaPartida = $horaPartida;
        $this->cantAsientosTotales = $cantAsientosTotales;
        $this->cantAsientosDisponibles = $cantAsientosDisponibles;
        $this->persona = $persona;
    }
    //Metodo Getters - Observadoras
    public function getNumero(){
        return $this->numero;
    }
    public function getImporte(){
        return $this->importe;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getDestino(){
        return $this->destino;
    }
    public function getHoraArribo(){
        return $this->horaArribo;
    }
    public function getHoraPartida(){
        return $this->horaPartida;
    }
    public function getCantATotales(){
        return $this->cantAsientosTotales;
    }
    public function getCantADisponibles(){
        return $this->cantAsientosDisponibles;
    }
    //Metodo setters - Modificadoras
    public function setNumero ($nuevoNumero){
        $this->numero = $nuevoNumero;
    }
    public function setImporte ($nuevoImporte){
        $this->importe = $nuevoImporte;
    }
    public function setFecha ($nuevaFecha){
        $this->fecha = $nuevaFecha;
    }
    public function setDestino ($nuevoDestino){
        $this->destino = $nuevoDestino;
    }
    public function setHoraArribo ($nuevaHoraArribo){
        $this->horaArribo = $nuevaHoraArribo;
    }
    public function setHoraPartida ($nuevaHoraPartida){
        $this->horaPartida = $nuevaHoraPartida;
    }
    public function setCantATotales ($nCantATotales){
        $this->cantAsientosTotales = $nCantATotales;
    }
    public function setCantADisponibles ($nCantADisponibles){
        $this->cantAsientosDisponibles = $nCantADisponibles;
    }
    //Metodos a aplicar
    
    //En la clase Vuelo se debe implementar el método asignarAsientosDisponibles que recibe por parámetros la cantidad de asientos que desean asignarse y de ser necesario actualizando la información del vuelo.El método retorna verdadero en caso que la asignación puedo concretarse y falso en caso contrario.
    public function asignarAsientosDisponibles($cantAsientosTotales){
        $respuesta = false;
        $cantDisponible = $this->getCantADisponibles();
        if ( $cantAsientosTotales <= $cantDisponible){
            $respuesta = true;
        }
        return $respuesta;
    }
    
}
?>
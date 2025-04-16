<?php
/**
 * En la clase Persona se registra la siguiente información: nombre, apellido, dirección, mail y teléfono.
 */
class Persona {
     //Atributos - Variables instancias
     private string $nombre;
     private string $apellido; 
     private string $direccion;
     private string $mail;
     private int $telefono;   
     //Metodo constructor
     public function __construct(string $nombre,string $apellido,string $direccion,string $mail,int $telefono){
          $this->nombre = $nombre;
          $this->apellido = $apellido;
          $this->direccion = $direccion;
          $this->mail = $mail;
          $this->telefono = $telefono;
     }
     //Metodos Getters - Observadoras
     public function getNombre():string{
         return $this->nombre;
     }
     public function getApellido():string{
         return $this->apellido;
     }
     public function getDireccion():string{
         return $this->direccion;
     }
     public function getMail():string{
         return $this->mail;
     }
     public function getTelefono():int{
         return $this->telefono;
     }
     //Metodos Setters - Modificadoras
     public function setNombre ($nuevoNombre):void{
         $this->nombre = $nuevoNombre;
     }
     public function setApellido ($nuevoApellido):void{
         $this->apellido = $nuevoApellido;
     }
     public function setDireccion ($nuevaDireccion):void{
         $this->direccion = $nuevaDireccion;
     }
     public function setMail ($nuevoMail):void{
         $this->mail = $nuevoMail;
     }
     public function setTelefono ($nuevoTelefono):void{
         $this->telefono = $nuevoTelefono;
     }
      //Metodo __toString-> Retorna una cadena de caracteres.
    public function __toString():string{
        return "Nombre: ".$this->getNombre()."\n"."Apellido: ".$this->getApellido()."Direccion: ".$this->getDireccion()."\n"."Mail: ".$this->getMail()."\n"."Telefono: ".$this->getTelefono()."\n";
     }

}
?>
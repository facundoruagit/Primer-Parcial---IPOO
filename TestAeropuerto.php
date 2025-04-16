<?php
include_once 'Persona.php';
include_once 'Vuelo.php';
include_once 'Aerolineas.php';
include_once 'Aeropuerto.php';

//Crear  2 instancias de la clase Aerolíneas

$Obj_Aerolineas1 = new Aerolineas("GG-R1","PREMIUM",[1]);
$Obj_Aerolineas2 = new Aerolineas("AA-B8","CLASICO",[0]);

//Crear  4 instancias de la clase vuelo.A cada instancia de Aerolínea creada en T1, incorporar 2 de los vuelos.
 $vuelo1 = new Vuelo(11,2000,'2025/04/16',"rusia","17:30","08:15",150,78,$persona);
 $vuelo2 = new Vuelo(12,4000,'2025/11/10',"londres","19:30","10:15",150,120,$persona);
 $vuelo3 = new Vuelo(13,6000,'2025/05/07',"paris","10:30","08:15",150,30,$persona);
 $vuelo4 = new Vuelo(14,8000,'2025/01/16',"new york","10:30","09:15",150,15,$persona);
//Crea un objeto de la clase Aeropuerto con la colección de aerolíneas creadas.
$obj_Aeropuerto = new Aeropuerto("Gris","Av.argentina",[1]);
?>
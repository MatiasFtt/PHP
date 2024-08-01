<?php
//clase persona
abstract class Persona{
private $nombre;
private $cedula;
private $fechaNacimiento;

function __construct($nombre, $cedula,$fechaNacimiento){
   
         $this->nombre = $nombre;
         $this->cedula= $cedula;
         $this->fechaNacimiento= $fechaNacimiento;
}    
 //nombre
public function setNombre($nombre) {
    $this->nombre = $nombre;
}
public function getNombre() {
    return $this->nombre ;
}
//cedula
public function setCedula($cedula) {
    $this->cedula = $cedula;
}
public function getCedula() {
    return $this->cedula ;
}
//fechaNac
public function setFechaNacimiento($fechaNacimientoa) {
    $this->fechaNacimiento = $fechaNacimiento;
}
public function getFechaNacimiento() {
    return $this->fechaNacimiento ;
}
 abstract public function getValor();
}

/* clase cliente */
class Cliente extends Persona{
   
    private $direccion;
    private $telefono;
    public function __construct($nombre, $cedula,$fechaNacimiento,$direccion,$telefono){
        parent::__construct($nombre, $cedula,$fechaNacimiento);
        $this->direccion = $direccion;
        $this->telefono = $telefono;   
    }  
        public function getValor() {
            return "Nombre: " . parent::getNombre() . ", Direccion: " . $this->direccion . ", Telefono: " . $this->telefono;
        }
    }
    

    
?>
<?php
class Persona{
    public $nombre;
    public $telefono;

    public function __construct($nombre,$tel){
        $this->nombre=$nombre;
        $this->telefono=$tel;
    }
    public function getDatos() {
        return "Nombre: ".$this->nombre."telefono: ".$this->telefono;
    }
}
 class Alumno extends Persona{
    private $grado;
    private $turno;
    public function __construct($nombre,$tel,$grado,$turno){
        parent::__construct($nombre,$tel);
        $this->grado=$grado;
        $this->turno=$turno;
    }
    public function getDatos() {
        return parent::getDatos()."Grado: ".$this->grado."Turno: ".$this->turno;
}
 }
 ?>
<h3> Craar un objeto array de la clase alumno </h3>

<?php 
$alumno1= new Alumno("Camila","0985555","tercero-Nivel Medio", "tarde");

?>
<h3> Imprimir datos con foreach </h3>

<?php 
echo $alumno1->getDatos();

?>

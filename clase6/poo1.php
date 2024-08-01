<?php
// Clase Automovil
class Automovil {
    // Atributos
    private $color;
    private $motor;
    private $marca;
    private $tipo;
    private $anio;   // Nuevo atributo
    private $precio; // Nuevo atributo

    // Constructor
    public function __construct($color, $motor, $marca, $tipo, $anio, $precio) {
         $this->color = $color;
         $this->motor = $motor;
         $this->marca = $marca;
         $this->tipo = $tipo;
         $this->anio = $anio;
         $this->precio = $precio;
    }

    // Método para obtener datos
    public function getDatos() {
        return "Marca: $this->marca, Color: $this->color, Año: $this->anio, Precio: $this->precio, Tipo: $this->tipo";
    }

    // Método para cambiar color
    public function setColor($color) {
        $this->color = $color;
    }

    // Método para cambiar precio
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    public function settipo($tipo) {
        $this->tipo = $tipo;
    }
}

// Crear instancia de Automovil
$auto1 = new Automovil("rojo", "2.0", "toyota", "deportivo", 2023, 25000);

// Mostrar datos iniciales
echo $auto1->getDatos();
echo "<hr>";

// Cambiar color y precio
$auto1->setColor("Azul");
$auto1->setPrecio("27000");
$auto1->settipo("4x4");

// Mostrar datos actualizados
echo $auto1->getDatos();
?>

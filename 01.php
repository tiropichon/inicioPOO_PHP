<?php 
declare(strict_types=1);
include 'includes/header.php';


//Definir una clase
//Agregar atributos
class Producto {
    public $nombre;
    public $precio;
    public $disponible;

    //Constructor
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }

    public function mostrarProducto() {
        echo "El producto es ". $this->nombre . " y su precio es de " . $this->precio . " €";
    }
}

//Instanciar la clase.
$producto = new Producto('Tablet',200,true);

//Llamar al método de clase mostrarProducto()
$producto->mostrarProducto();

echo '<pre>';
var_dump($producto);
echo '</pre>';



include 'includes/footer.php';
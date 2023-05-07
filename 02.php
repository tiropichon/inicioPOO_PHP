<?php 
declare(strict_types=1);
include 'includes/header.php';


//Definir una clase
//Agregar atributos
class Producto {
    //Public - se puede acceder y modificar en cualquier lugar (clase y objeto)
    //protected - se puede acceder sólo en la clase.
    //private - solo miembros de la misma clase pueden acceder a el.

    //Constructor
    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }

    public function mostrarProducto() : void {
        echo "El producto es ". $this->nombre . " y su precio es de " . $this->precio . " €";
    }

    public function getNombre() : string{
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

//Instanciar la clase.
$producto = new Producto('Tablet',200,true);

//Llamar al método de clase mostrarProducto()
// $producto->mostrarProducto();

echo $producto->getNombre();
$producto->setNombre('Nuevo nombre');



echo '<pre>';
var_dump($producto);
echo '</pre>';



include 'includes/footer.php';
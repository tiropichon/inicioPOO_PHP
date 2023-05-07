<?php 
declare(strict_types=1);
include 'includes/header.php';

// Métodos estáticos

class Producto {

    public $imagen;

    public static $imagenPlaceholder = 'imagen.jpg';

    //Constructor
    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
        if($imagen){
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerImagenProducto(){
        return self::$imagen;
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

echo Producto::obtenerImagenProducto();

//Instanciar la clase.
$producto = new Producto('Tablet',200,true.'monitor curvo.jpg');

echo $producto->obtenerImagenProducto();
<?php include 'includes/header.php';
// CONectar a la BD con PDO.

$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud','root','root');

// Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

//Preparamos
$stmt = $db->prepare($query);

//Ejecutamos
$stmt->execute();

//Recogemos los resultados
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Iterar
foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo '<br>';
    echo $propiedad['imagen'];
    echo '<br>';
endforeach;

// echo '<pre>';
// var_dump($resultado);
// echo '</pre>';

include 'includes/footer.php';
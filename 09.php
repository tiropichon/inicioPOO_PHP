<?php include 'includes/header.php';
//BD con POO y mysqli

$db = new mysqli('localhost','root','root','bienesraices_crud');

// Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

// Lo preparamos
$stmt = $db->prepare($query);

// Ejecutamos
$stmt->execute();

//Creamos las variables
$stmt->bind_result($titulo, $imagen);

// Asignamos el resultado
$stmt->fetch();

// Imprimimos el resultado
while($stmt->fetch()):
    var_dump($titulo);
    var_dump($imagen);
endwhile;

include 'includes/footer.php';
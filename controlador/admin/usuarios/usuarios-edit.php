<?php

include('database.php');


    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $perfil = $_POST['perfil'];
    $id = $_POST['id'];
    

$query = "UPDATE usuarios SET usuario = '$usuario', password = '$password', 
perfil = '$perfil' 
WHERE id = '$id'";

$result = mysqli_query($connection, $query);
if(!$result) {
    die('fallo el edit');
}
echo "se actualizo el edit";

?>

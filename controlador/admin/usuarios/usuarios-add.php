<?php

include('database.php');

if(isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $perfil = $_POST['perfil'];
       
    $query = "INSERT into usuarios(usuario,password,perfil) VALUES 
    ('$usuario','$password','$perfil') ";
    $result = mysqli_query ($connection, $query);
    if(!$result){
        die('fallo');
    }
    echo 'Bien';
}

?>
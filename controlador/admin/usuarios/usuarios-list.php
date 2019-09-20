<?php

include('database.php');

$query= "SELECT * from usuarios";

$result= mysqli_query($connection, $query);

if(!$result) {
    die('Fallo el lista'). mysqli_error($connection);
}
$json = array();
while($row = mysqli_fetch_array($result)){
    $json[] = array(
        'usuario' => $row['usuario'],
        'password' => $row['password'],
        'id' => $row['id'],
        'perfil' => $row['perfil']

    );
}
$jsonstring = json_encode($json);
echo $jsonstring;
?>
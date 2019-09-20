<?php

include('database.php');
$id = $_POST['id'];
$query = "SELECT * FROM usuarios WHERE id = $id";
$result = mysqli_query($connection, $query);
if(!$result) {
    die('a fallado esta cosa');
}
while($row = mysqli_fetch_array($result)) {
    $json[] = array(
        'usuario' => $row['usuario'],
        'password' => $row['password'],
        'id' => $row['id'],
        'perfil' => $row['perfil']
    );

}
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
 
?>
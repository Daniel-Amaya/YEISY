<?php

include('database.php');

$search = $_POST['search'];
if(!empty($search)) {
    $query = "SELECT * FROM medidas WHERE nombre LIKE '$search%'";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('error' . mysqli_error($connection));
    }
    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'nombre' => $row['nombre'],
            'apellidos' => $row['apellidos'],
            'id' => $row['id']


        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}

?>
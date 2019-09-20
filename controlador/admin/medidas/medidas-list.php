<?php

include('database.php');

$query= "SELECT * from medidas";

$result= mysqli_query($connection, $query);

if(!$result) {
    die('Fallo el lista'). mysqli_error($connection);
}
$json = array();
while($row = mysqli_fetch_array($result)){
    $json[] = array(
        'nombre' => $row['nombre'],
        'apellidos' => $row['apellidos'],
        'id' => $row['id'],
        'celular' => $row['celular'],
        'escote' => $row['escote'],
        'escote_total' => $row['escote_total'],
        'talle_delante' => $row['talle_delante'],
        'talle_atras' => $row['talle_atras'],
        'altura_busto' => $row['altura_busto'],
        'separacion_busto' => $row['separacion_busto'],
        'contorno_busto' => $row['contorno_busto'],
        'hombro_delante' => $row['hombro_delante'],
        'hombro_atras' => $row['hombro_atras'],
        'contorno_hombro' => $row['contorno_hombro'],
        'costado' => $row['costado'],
        'cintura' => $row['cintura'],
        'cintura_alta' => $row['cintura_alta'],
        'cintura_baja' => $row['cintura_baja'],
        'cadera' => $row['cadera'],
        'descaderado' => $row['descaderado'],
        'altura_cadera' => $row['altura_cadera'],
        'largo_falda' => $row['largo_falda'],
        'largo_manga' => $row['largo_manga'],
        'contorno_brazo' => $row['contorno_brazo'],
        'corte_imperio' => $row['corte_imperio']

    );
}
$jsonstring = json_encode($json);
echo $jsonstring;
?>
<?php

include('database.php');


    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $id = $_POST['id'];
    $celular = $_POST['celular'];
    $escote = $_POST['escote'];
    $escote_total = $_POST['escote_total'];
    $talle_delante = $_POST['talle_delante'];
    $talle_atras = $_POST['talle_atras'];
    $altura_busto = $_POST['altura_busto'];
    $separacion_busto = $_POST['separacion_busto'];
    $contorno_busto = $_POST['contorno_busto'];
    $hombro_delante = $_POST['hombro_delante'];
    $hombro_atras = $_POST['hombro_atras'];
    $contorno_hombro = $_POST['contorno_hombro'];
    $costado = $_POST['costado'];
    $cintura = $_POST['cintura'];
    $cintura_alta = $_POST['cintura_alta'];
    $cintura_baja = $_POST['cintura_baja'];
    $cadera = $_POST['cadera'];
    $descaderado = $_POST['descaderado'];
    $altura_cadera = $_POST['altura_cadera'];
    $largo_falda = $_POST['largo_falda'];
    $largo_manga = $_POST['largo_manga'];
    $contorno_brazo= $_POST['contorno_brazo'];
    $corte_imperio = $_POST['corte_imperio'];
    

$query = "UPDATE medidas SET nombre = '$nombre', apellidos = '$apellidos', 
celular = '$celular' , escote = '$escote', escote_total = '$escote_total', 
talle_delante = '$talle_delante', talle_atras = '$talle_atras', altura_busto = '$altura_busto', 
separacion_busto = '$separacion_busto',contorno_busto = '$contorno_busto', hombro_delante = '$hombro_delante', 
hombro_atras = '$hombro_atras', contorno_hombro = '$contorno_hombro', costado = '$costado',
cintura = '$cintura', cintura_alta = '$cintura_alta', cintura_baja = '$cintura_baja', cadera = '$cadera', 
descaderado = '$descaderado', altura_cadera = '$altura_cadera', largo_falda = '$largo_falda', 
largo_manga = '$largo_manga', contorno_brazo = '$contorno_brazo', corte_imperio = '$corte_imperio'
WHERE id = '$id'";

$result = mysqli_query($connection, $query);
if(!$result) {
    die('fallo el edit');
}
echo "se actualizo el edit";

?>

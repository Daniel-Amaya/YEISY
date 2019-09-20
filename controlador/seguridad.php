<?php

session_start();

function validarEntrada(){

    if(isset($_SESSION['seguridad']) && !empty($_SESSION['seguridad'])){
        return true;
    }else{
        echo "<script>alert('No cuenta con el permiso para entrar'); window.location 0= 'http://localhost/YEISY/vista/login.php'</script>";
        exit("ERROR: No tiene acceso al sistema");
    }

}

validarEntrada();

?>
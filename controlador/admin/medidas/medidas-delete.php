<?php

    include('database.php');

    if(isset($_POST['id'])){
       
     $id = $_POST['id'];


     $query = "DELETE FROM medidas WHERE id = $id";
     $result = mysqli_query($connection, $query);

     if(!$result){
         die('no lo borro pri');
     }
        echo "uy pri lo borraste";
    }

    

?>
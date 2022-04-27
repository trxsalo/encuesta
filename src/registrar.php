<?php

include("./conn.php");

if(isset($_POST['enviar'])){

    if(isset($_POST['profesion'])){
        $profesion = $_POST['profesion'];
    }

    if(isset($_POST['rol'])){
        $rol = $_POST['rol'];
    }

    if (isset($_POST['conocePHP'])){
        $conocePHP = $_POST['conocePHP'];
    }

    if(isset($_POST['phpConocimiento'])){
        $phpConocimiento = $_POST['phpConocimiento'];
    }

    $query = "INSERT INTO registro(profesion,rol,conocePHP,phpConocimiento)
                values('$profesion','$rol','$conocePHP','$phpConocimiento')";


    echo "$rol","$profesion", "$conocePHP","$phpConocimineto";

    $result=mysqli_query($conn,$query);

    if(!$result){
        die("Fallo el envió a la db");
    }

    $_SESSION['mensaje'] = "Se guarda exitosamente a la DB";
    $_SESSION['mensaje_tipo'] = "success";
}



?>
<?php

session_start();

$conn = mysqli_connect(
    '127.0.0.1:3306', //modifica
    'salo',
    '0108',
    'encuesta'
) or die(mysqli_erro($mysqli));
?>

<?php

function connection(){
    $host = "localhost";
    $user = "u494011328_root";
    $pass = "Martin_root06";
    $bd = "u494011328_la_ajuaje";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>
<?php

include("../connection.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$f_nac = $_POST['f_nac'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$tutor = $_POST['tutor'];
$correo = $_POST['correo'];
$visita = $_POST['visita'];
$hora_fin = $_POST['hora_fin'];
$guia = $_POST['guia'];
$fecha = $_POST['fecha'];
$turistas = $_POST['turistas'];

$sql="UPDATE reservacion SET id='$id', nombre='$nombre', apellido='$apellido', f_nac='$f_nac', pais='$pais', estado='$estado', tutor='$tutor', correo='$correo', visita='$visita',  hora_fin='$hora_fin', guia='$guia', fecha='$fecha', turistas='$turistas' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: view_reser.php");
}else{

}

?>
<?php
include("connection.php");
$con = connection();

$id = $_POST['id'];
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

$sql = "INSERT INTO reservacion VALUES('$id','$nombre','$apellido','$f_nac','$pais','$estado','$tutor', '$correo', '$visita',  '$hora_fin', '$guia', '$fecha', '$turistas')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>
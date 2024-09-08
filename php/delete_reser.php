<?php

include("../connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM reservacion WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: view_reser.php");
}else{

}

?>
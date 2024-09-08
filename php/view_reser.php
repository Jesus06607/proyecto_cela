<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
            alert("Debes de Iniciar Sesion");
            window.location = "./index.";
            </script>
        ';
        session_destroy();
        die();
    }

include("../connection.php");
$con = connection();

$sql = "SELECT * FROM reservacion";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/table.css" rel="stylesheet">
    <title>Registro de visitas</title>
</head>

<body>
 

    <div class="users-table">
<h2><center><b>Visitas registradas CELA </b></center></h2>
<a href=" cerrar_sesion.php">LogOut</a>
        <table  class="content-table">
            <thead>
                <tr>
                    
                    <th>Nombre</th>
                    <th>apellido</th>
                    <th>Fecha Nac</th>
                    <th>Pais</th>
                    <th>Estado</th>
                    <th>Encargado</th>                 
                    <th>Correo</th>
                    <th>Visita</th>
                    <th>Salida</th>
                    <th>Guia</th>
                    <th>turistas</th>
                    <th>fecha</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>

                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['apellido'] ?></td>
                        <td><?= $row['f_nac'] ?></td>
                        <td><?= $row['pais'] ?></td>
                        <td><?= $row['estado'] ?></td>
                        <td><?= $row['tutor'] ?></td>
                        <td><?= $row['correo'] ?></td>
                        <td><?= $row['visita'] ?></td>
                        <td><?= $row['hora_fin'] ?></td>
                        <td><?= $row['guia'] ?></td>
                        <td><?= $row['turistas'] ?></td>
                        <td><?= $row['fecha'] ?></td>
                        <td><a href="upd_reser.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></td>
                        <td><a href="delete_reser.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>
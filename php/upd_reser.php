<?php 
    include("../connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM reservacion WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
        <title>Editar visitas</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_reser.php" method="POST">
      <h1>Editar Turistas</h1>
                <input type="text" name="id" value="<?= $row['id']?>">
                <label for="">Nombre</label>
                <input type="text" name="nombre" placeholder="nombre" value="<?= $row['nombre']?>">
                <label for="">Apellido</label>
                <input type="text" name="apellido" placeholder="apellido" value="<?= $row['apellido']?>">
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="f_nac" placeholder="fecha nac" value="<?= $row['f_nac']?>">
                <label for="">Pais</label>
                <input type="text" name="pais" placeholder="pais" value="<?= $row['pais']?>">
                <label for="">Estado</label>
                <input type="text" name="estado" placeholder="estado" value="<?= $row['estado']?>">
                <label for="">Tutor</label>
                <input type="text" name="tutor" placeholder="tutor" value="<?= $row['tutor']?>">
                <label for="">Correo</label>
                <input type="text" name="correo" placeholder="correo" value="<?= $row['correo']?>">
                <label for="">Visito</label>
                <input type="text" name="visita" placeholder="visita" value="<?= $row['visita']?>">
                <label for="">Hora salida</label>
                <input type="time" name="hora_fin" placeholder="hora_fin" value="<?= $row['hora_fin']?>">
                <label for="">Guia</label>
                <input type="text" name="guia" placeholder="guia" value="<?= $row['guia']?>">
                <label for="">Fecha de visita</label>
                <input type="date" name="fecha" placeholder="fecha" value="<?= $row['fecha']?>">
                <label for="">Turistas</label>
                <input type="text" name="turistas" placeholder="turistas" value="<?= $row['turistas']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
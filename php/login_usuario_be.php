<?php
    session_start();
    
    
    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $password = ( $password);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and password='$password' ");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $usuario;
        header("location: ./view_reser.php");
        exit;
    }else{
            echo '
               <script>
                    alert("Usuario inexistente, favor verificar sus datos correctamente");
                    window.location = "https://laaguaje.website/";
                </script>
            ';
            exit;
    }
?>

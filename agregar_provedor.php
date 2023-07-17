<?php
    include("conexion.php");
    $conn = conectar();
    $nombres = $_POST['nombres'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $ruc = $_POST['ruc'];
    $sql = "INSERT INTO provedores(nombres, email, direccion, telefono, ruc)
            VALUES ('$nombres', '$email', '$direccion', '$telefono', '$ruc')";

    $squery=mysqli_query($conn, $sql);
    if($squery){

        Header("Location: proveedores.php");
    }
?>
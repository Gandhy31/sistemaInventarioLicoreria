<?php
    include("conexion.php");
    $conn = conectar();
    $nombres = $_POST['nombres'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $sql = "UPDATE provedores 
            SET nombres='$nombres', email='$email', direccion='$direccion', telefono='$telefono'
            WHERE id_provedores='$id'";

    $squery=mysqli_query($conn, $sql);
    if($squery){

        Header("Location: proveedores.php");
    }
?>
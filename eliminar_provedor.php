<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_POST['id'];
    $sql = "DELETE FROM provedores
            WHERE id_provedores='$id'";

    $squery=mysqli_query($conn, $sql);
    if($squery){

        Header("Location: proveedores.php");
    }
?>
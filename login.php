<?php
    include("conexion.php");
    $conn = conectar();
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
    $sql1 = "SELECT*
            FROM usuarios
            WHERE Nombres='$user'";
    $query1=mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($query1);
    $id = $row1['id_usuario'];

    if(($row1['Nombres']==$user)&&($row1['password']==$pass)){ 
        session_start();
        $_SESSION['idA']=$id;        
        Header("Location: inicio.php");
    }else{
        $e=1;
        Header("Location: index.php?e=$e");
    }
?>
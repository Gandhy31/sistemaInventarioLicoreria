<?php
function conectar(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bd="inventario";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$bd);
    mysqli_select_db($conn, $bd);
    return $conn;
}
?>
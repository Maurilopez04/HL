<?php $conn = new mysqli("localhost", "root", "", "hltuning"); 
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
    }?>
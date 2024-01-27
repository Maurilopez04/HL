<?php 
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "hltuning");
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

} catch (mysqli_sql_exception $e) {
    header("Location: error.php");
    exit();
}
?>
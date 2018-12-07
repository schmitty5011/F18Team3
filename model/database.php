<?php

// Set up the database connection
$dsn = 'mysql:host=webdev.bentley.edu;dbname=f18team3';
$username = 'F18Team3';
$password = 'F18Team3';
//$dsn = 'mysql:host=localhost;dbname=my_guitar_shop';
//$username = 'root';
//$password = '';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/db_error_connect.php');
    exit();
}
?>

<?php

// Set up the database connection
<<<<<<< HEAD
//$dsn = 'mysql:host=webdev.bentley.edu;dbname=f18team3';
//$username = 'F18Team3';
//$password = 'F18Team3';
$dsn = 'mysql:host=localhost;dbname=my_guitar_shop';
$username = 'root';
$password = '';
=======
$dsn = 'mysql:host=webdev.bentley.edu;dbname=f18team3';
$username = 'F18Team3';
$password = 'F18Team3';
//$dsn = 'mysql:host=localhost;dbname=my_guitar_shop';
//$username = 'root';
//$password = '';
>>>>>>> 74d05023e4b50445ffcdb1bf33ef0f8e9fd571c3
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/db_error_connect.php');
    exit();
}
?>

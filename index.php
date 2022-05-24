<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once $_SERVER["DOCUMENT_ROOT"].'/../config.php';

// 1. Define Query
$sql = "INSERT INTO pets (name, type, color) 
        VALUES (:name, :type, :color)";

// 2. Prepare the statement
$statement = $dbh->prepare($sql);

// 3. Bind the parameters
$name = 'Joey';
$type = "kangaroo";
$color = 'tan';
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

// 4. Execute the statement
$statement->execute();
<?php

define("MYSQL_CONN_ERROR", "Unable to connect to database."); 

// Ensure reporting is setup correctly 
mysqli_report(MYSQLI_REPORT_STRICT); 

try {
    // Set your sequel database information here
    $mysqli = mysqli_connect("localhost", "root", "samlingx56521", "rmspcheck");
    $query = "SELECT * FROM domains";
    $result = $mysqli->query($query);
} catch (Exception $e) {
    echo $e->errorMessage();
}

?>

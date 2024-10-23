<?php
// Include configuration file to access database credentials
include_once '../config/config.php';

function db_connect() {

    // Create a new mysqli connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;  // Return the connection object
}

<?php
// Include database connection function
include '../config/config.php';
include '../includes/db_connect.php';

// Attempt to connect to the database
$conn = db_connect();

// If the connection is successful
if ($conn) {
    echo "Database connection successful!";
} else {
    echo "Database connection failed.";
}

// Close the connection
$conn->close();
?>

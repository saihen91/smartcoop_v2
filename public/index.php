<?php
session_start(); // Start the session

// Include necessary files
include '../config/config.php';
include '../includes/functions/db_connect.php';
include '../includes/functions/auth.php';
require_once '../app/controllers/AuthController.php'; // Include the AuthController

// Define routes
$routes = [
    '/' => '../app/views/auth/login.php',
    '/login' => '../app/views/auth/login.php',
    '/pejabat' => '../app/views/pejabat/dashboard.php',
    '/arrahnu' => '../app/views/arrahnu/dashboard.php',
    '/kedai' => '../app/views/kedai/dashboard.php'
];

// Capture the current URL path
$request_uri = strtok($_SERVER['REQUEST_URI'], '?');

// Handle the route matching
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'login') {
    // Get the form data
    $username = $_POST['login-username'];
    $password = $_POST['login-password'];

    // Create an instance of AuthController
    $authController = new AuthController();

    // Authenticate the user
    $user = $authController->authenticate($username, $password);

    if ($user) {
        // Set session variables
        $_SESSION['username'] = $user['username'];
        $_SESSION['department'] = $user['department'];
        $_SESSION['nama'] = $user['nama_user'];

        // Redirect based on user department
        switch ($user['department']) {
            case 'PEJABAT':
                header('Location: /pejabat');
                break;
            case 'ARRAHNU':
                header('Location: /arrahnu');
                break;
            case 'KEDAI':
                header('Location: /kedai');
                break;
            default:
                header('Location: /'); // Fallback
        }
        exit(); // Stop further execution
    } else {
        // Handle authentication failure
        $_SESSION['login_error'] = "Invalid username or password."; // Set error message in session
        header('Location: /'); // Redirect back to login page
        exit();
    }
} elseif (isset($_GET['action']) && $_GET['action'] === 'logout') {
    // Handle logout
    $authController = new AuthController();
    $authController->logout(); // Call the logout method
} else {
    // Other routing logic for the application
    if (array_key_exists($request_uri, $routes)) {
        include $routes[$request_uri];
    } else {
        // 404 Page Not Found
        header("HTTP/1.0 404 Not Found");
        include '../app/views/404.php';  // Custom 404 page
    }
}
?>

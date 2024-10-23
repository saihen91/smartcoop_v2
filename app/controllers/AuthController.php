<?php
// app/controllers/AuthController.php

require_once '../includes/functions/db_connect.php';  // Database connection
require_once '../includes/functions/auth.php';        // Authentication helper

class AuthController {
    // Authenticate the user based on username and password
    public function authenticate($username, $password) {
        // Get the database connection
        $conn = db_connect();
    
        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("SELECT * FROM system_user WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
    
        // Check if user exists
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
    
            // Verify the password
            if ($password === $user['password']) {
                // Return the user details, including the role
                return [
                    'username' => $user['username'],
                    'department' => $user['department'],
                    'nama_user' => $user['nama_user'] 
                ];
            } else {
                // Debugging: Incorrect password
                $_SESSION['login_error'] = "Kata Laluan Tidak Sepadan";  
            }
        } else {
            // Debugging: User not found
            $_SESSION['login_error'] = "Tiada Maklumat Pengguna Di Dalam Sistem";  
        }
    
        // If authentication fails, return null
        return null;
    }
    

    // Log the user out by destroying the session
    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /');
        exit();
    }

    // Check if the user is logged in
    public static function isAuthenticated() {
        session_start();
        return isset($_SESSION['username']);
    }
}

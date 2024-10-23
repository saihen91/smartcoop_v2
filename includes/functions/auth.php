<?php
// auth.php

function isLoggedIn() {
    return isset($_SESSION['username']); // Check if the username session variable is set
}
?>

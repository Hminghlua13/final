<?php
// Define expected username and password
$expectedUsername = "hha";
$expectedPassword = "321"; // Replace this with the actual password hash for enhanced security

// Get user input from the form
$userInputUsername = $_POST['username'];
$userInputPassword = $_POST['password'];

// Validate username and password
if ($userInputUsername === $expectedUsername && $userInputPassword === $expectedPassword) {
    // Redirect to the owner's dashboard if credentials are correct
    header("Location: home.html"); // Replace with the actual URL of the owner's dashboard
    exit();
} else {
    // Redirect back to the login page if credentials are incorrect
    header("Location: index.html");
    exit();
}
?>

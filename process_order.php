<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $address = $_POST["company"];
    $email = $_POST["email"];
    $pin = $_POST["pin"];
    $landmark = $_POST["Landmark"];
    $phone = $_POST["phone"];
    $quantity = $_POST["quantity"];
    $productDescription = $_POST["product_description"];

    // TODO: Process the order (e.g., save to database, send confirmation email, etc.)

    // Redirect the user to a thank you page
    header("Location: thank_you.html");
    exit();
} else {
    // If the form wasn't submitted properly, redirect the user to an error page
    header("Location: error.html");
    exit();
}
?>

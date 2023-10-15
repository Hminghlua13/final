 <?php
include("connectdb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM logindetail WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the entered password with the stored hashed password
        if (password_verify($password, $row["password"])) {
            // Password is correct, you can proceed with login
            header("Location: index.html");
            exit();
        } else {
            // Password is incorrect, send an error response to the JavaScript code
            http_response_code(401); // Unauthorized status code
            echo "Incorrect password";
        }
    } else {
        // User not found, send an error response to the JavaScript code
        http_response_code(401); // Unauthorized status code
        echo "User not found";
    }

    $conn->close();
}
?>
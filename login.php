<?php
// Database credentials
$servername = "localhost";
$username = "username";
$password = "  ";
$dbname = "login";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["psw"];

    // SQL query to retrieve the user data
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if the query returned a result
    if ($result->num_rows > 0) {
        // User authenticated successfully, do something
    } else {
        // Authentication failed, do something
    }
}

// Close the connection
$conn->close();
?>

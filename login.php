<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // You should perform proper authentication and validation here
    // For the sake of this example, let's assume a simple hardcoded check
    if ($username === "user" && $password === "pass") {
        echo "Login successful!";
    } else {
        echo "Login failed. Please check your credentials.";
    }
}
?>
  
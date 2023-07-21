<?php
$servername = "sql109.infinityfree.com"; // Replace with your database server name
$username = "if0_34655543"; // Replace with your database username
$password = "DFWL9JW0K6"; // Replace with your database password
$dbname = "if0_34655543_contact_form"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
   
    $message = $_POST["message"];

    // Insert data into the database
    $sql = "INSERT INTO data (name, email, message) VALUES ('$name', '$email','$message')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Message submitted successfully!");</script>';
        echo '<script>window.location.href = "index.html";</script>';
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>



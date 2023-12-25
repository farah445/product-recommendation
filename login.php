<?php

if(isset($_POST['submit']))
{
// Server variables
$servername = "localhost";
$username = "root"; // Replace with your actual database username
$password = ""; // Replace with your actual database password
$dbname = "product_recommendation";
$tblname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: (". $conn->connect_errno .") " . $conn->connect_error);
}

// Get data from form
$userName = $_POST['userName'];
$password = $_POST['password'];

// Insert data into table
$sql = "INSERT INTO login (userName, password) VALUES ('$userName', '$password')";

if ($conn->query($sql) ) {
    echo "New record created successfully";
} else {
    echo "Error: ";
}
}
// Close connection
$conn->close();

?>
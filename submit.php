<?php
$servername = "localhost"; 
$username   = "root"; 
$password   = "";       
$dbname     = "ulloor_artist_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

$name    = $_POST['name'];
$phone   = $_POST['phone'];
$email   = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO orders (name, phone, email, message) VALUES ('$name','$phone','$email','$message')";

if($conn->query($sql) === TRUE){
    echo "<h2>Order Submitted Successfully!</h2>";
}else{
    echo "Error: ".$conn->error;
}

$conn->close();
?>

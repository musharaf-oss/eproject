<?php

// WITH ENCRYPTED PASSWORD

// $host = 'localhost';
// $db = 'legalcare_users'; 
// $user = 'root';          
// $pass = '';             
// $conn = new mysqli($host, $user, $pass, $db);


// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


// $name = $_POST['name'];
// $email = $_POST['email'];
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

// $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("sss", $name, $email, $password);

// if ($stmt->execute()) {
//     echo "User registered successfully!";
// } else {
//     echo "Error: " . $stmt->error;
// }

// $stmt->close();
// $conn->close();


// WITHOUT ENCRYPTED PASSWORD

$host = 'localhost';
$db   = 'legalcare_users'; 
$user = 'root';            
$pass = '';                

// Connect
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password']; 

// Insert into database
$sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $password);

if ($stmt->execute()) {
    echo "User registered successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

<?php
require 'db_connect.php';

$name  = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$pass  = $_POST['password'];

$emailPattern = "/^[^ ]+@[^ ]+\.[a-z]{2,3}$/";
$phonePattern = "/^[0-9]{10}$/";
$passPattern  = "/^(?=.*[A-Z])(?=.*\d).{6,}$/";

if (!preg_match($emailPattern, $email)) die("Invalid email format!");
if (!preg_match($phonePattern, $phone)) die("Phone must be 10 digits!");
if (!preg_match($passPattern, $pass)) die("Weak password!");

$hashed = password_hash($pass, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users(name, email, phone, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $hashed);

if ($stmt->execute()) {
  echo "Registration successful! <a href='../login.html'>Login here</a>";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

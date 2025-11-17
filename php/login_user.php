<?php
session_start();
require 'db_connect.php';

$email = $_POST['email'];
$pass  = $_POST['password'];

$stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
  $stmt->bind_result($id, $hashed);
  $stmt->fetch();
  if (password_verify($pass, $hashed)) {
    $_SESSION['user_id'] = $id;
    header("Location: ../dashboard.php");
  } else {
    echo "Incorrect password!";
  }
} else {
  echo "Email not registered!";
}

$stmt->close();
$conn->close();
?>

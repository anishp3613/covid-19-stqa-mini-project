<?php
require 'db_connect.php';
session_start();

if(!isset($_SESSION['user_id'])) {
  die("Unauthorized access");
}

$user_id = $_SESSION['user_id'];
$comment = trim($_POST['comment']);

if(empty($comment)) die("Comment cannot be empty!");

$stmt = $conn->prepare("INSERT INTO comments (user_id, comment) VALUES (?, ?)");
$stmt->bind_param("is", $user_id, $comment);
$stmt->execute();

header("Location: ../dashboard.php");
?>

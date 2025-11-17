<?php
session_start();
if(!isset($_SESSION['user_id'])) {
  header("Location: login.html");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include('includes/header.php'); ?>
  <div class="content">
    <h2>Welcome to COVID-19 Dashboard</h2>
    <form action="php/submit_comment.php" method="POST">
      <textarea name="comment" placeholder="Write your comment here..." required></textarea><br>
      <button type="submit">Submit Comment</button>
    </form>
    <h3>Recent Comments</h3>
    <div class="comments">
      <?php include('php/fetch_data.php'); ?>
    </div>
  </div>
  <?php include('includes/footer.php'); ?>
</body>
</html>

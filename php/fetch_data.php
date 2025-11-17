<?php
require 'db_connect.php';

$query = "SELECT users.name, comments.comment, comments.date_posted 
          FROM comments 
          JOIN users ON comments.user_id = users.id 
          ORDER BY comments.date_posted DESC";

$result = $conn->query($query);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<p><b>{$row['name']}</b>: {$row['comment']} ({$row['date_posted']})</p>";
  }
} else {
  echo "<p>No comments yet.</p>";
}
$conn->close();
?>

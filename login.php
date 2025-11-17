<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include('includes/header.php'); ?>
  <div class="form-container">
    <h2>Login</h2>
    <form action="php/login_user.php" method="POST">
      <input type="email" name="email" placeholder="Email" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Login</button>
    </form>
  </div>
  <?php include('includes/footer.php'); ?>
</body>
</html>

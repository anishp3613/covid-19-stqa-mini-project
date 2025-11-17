<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/validation.js"></script>
</head>
<body>
  <?php include('includes/header.php'); ?>
  <div class="form-container">
    <h2>User Registration</h2>
    <form action="php/register_user.php" method="POST" onsubmit="return validateRegister();">
      <input type="text" name="name" placeholder="Full Name" required><br>
      <input type="email" name="email" placeholder="Email" required><br>
      <input type="text" name="phone" placeholder="Phone (10 digits)" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
  </div>
  <?php include('includes/footer.php'); ?>
</body>
</html>

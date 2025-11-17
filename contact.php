<!DOCTYPE html>
<html>
<head>
  <title>Contact Us - COVID-19 Information Portal</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include('includes/header.php'); ?>

  <div class="content contact-page">
    <h2>Contact Us</h2>
    <p>
      Have questions, feedback, or suggestions?  
      We’d love to hear from you! You can reach us using the details below.
    </p>

    <div class="contact-container">
      <!-- Contact Info -->
      <div class="contact-info">
        <h3>📞 Get in Touch</h3>
        <p><strong>Address:</strong><br>
           Genba Sopanrao Moze College of Engineering,<br>
           Balewadi, Pune - 411045, Maharashtra</p>
        <p><strong>Email:</strong> covidinfo@gmail.com</p>
        <p><strong>Phone:</strong> +91 9876543210</p>
        <p><strong>Website:</strong> <a href="http://localhost/covid19_INFO_PROJECT/">covid19-info-portal</a></p>
      </div>

      <!-- Contact Form -->
      <div class="contact-form">
        <h3>✉️ Send Us a Message</h3>
        <form action="#" method="POST" onsubmit="return validateContactForm();">
          <input type="text" id="name" placeholder="Your Name" required><br>
          <input type="email" id="email" placeholder="Your Email" required><br>
          <textarea id="message" placeholder="Write your message here..." required></textarea><br>
          <button type="submit">Send Message</button>
        </form>
        <p id="form-status"></p>
      </div>
    </div>

    <!-- Embedded Google Map -->
    <div class="map-container">
      <h3>📍 Our Location</h3>
      <iframe
        src="https://www.google.com/maps?q=Genba%20Sopanrao%20Moze%20College%20of%20Engineering%20Balewadi%20Pune&t=&z=13&ie=UTF8&iwloc=&output=embed"
        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>

  <script>
    // Simple frontend form validation
    function validateContactForm() {
      let name = document.getElementById("name").value.trim();
      let email = document.getElementById("email").value.trim();
      let msg = document.getElementById("message").value.trim();
      let status = document.getElementById("form-status");

      const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

      if (name === "" || msg === "") {
        status.innerHTML = "⚠️ Please fill all fields!";
        status.style.color = "red";
        return false;
      }
      if (!email.match(emailPattern)) {
        status.innerHTML = "⚠️ Please enter a valid email!";
        status.style.color = "red";
        return false;
      }

      status.innerHTML = "✅ Message sent successfully (demo only)";
      status.style.color = "green";
      return false; // prevents actual submission (demo purpose)
    }
  </script>
</body>
</html>

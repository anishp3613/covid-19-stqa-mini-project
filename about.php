<!DOCTYPE html>
<html>
<head>
  <title>About - COVID-19 Information Portal</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include('includes/header.php'); ?>

  <div class="content about-page">
    <h2>About the COVID-19 Information Portal</h2>
    <p>
      The <b>COVID-19 Information Portal</b> is a dynamic web application developed to provide
      users with accurate, verified, and up-to-date information about the COVID-19 pandemic.
      During the outbreak, misinformation spread rapidly. Our goal is to create a single platform
      where users can find preventive measures, vaccination updates, safety guidelines,
      and real-time global data — all in one place.
    </p>

    <h3>🌐 Project Overview</h3>
    <p>
      This system is a full-stack web project built using <b>HTML, CSS, JavaScript, PHP, and MySQL</b>.
      It allows user registration and login, feedback submission, and dynamic content management.
      Input validation is implemented both at the client side (JavaScript) and server side (PHP)
      using Regular Expressions (Regex) to ensure data security and consistency.
    </p>

    <h3>⚙️ Technologies Used</h3>
    <ul class="tech-list">
      <li><b>HTML5</b> — for webpage structure</li>
      <li><b>CSS3</b> — for responsive layout and design</li>
      <li><b>JavaScript</b> — for input validation and interactivity</li>
      <li><b>PHP</b> — for backend processing and database interaction</li>
      <li><b>MySQL</b> — for data storage and management</li>
      <li><b>Regex</b> — for form input validation (email, phone, password)</li>
    </ul>

    <h3>🏗️ System Architecture</h3>
    <p>
      The project follows a <b>three-tier architecture</b>:
    </p>
    <ol>
      <li><b>Presentation Tier:</b> The user interface designed using HTML, CSS, and JavaScript.</li>
      <li><b>Application Tier:</b> PHP handles user input, session management, and data validation.</li>
      <li><b>Database Tier:</b> MySQL stores user details, comments, and other records securely.</li>
    </ol>

    <div class="architecture-box">
      <h4>System Flow:</h4>
      <p>
        User → Browser (HTML/CSS/JS) → PHP Server (Validation & Logic) → MySQL Database → Response → User
      </p>
    </div>

    <h3>🎯 Project Objectives</h3>
    <ul class="objectives">
      <li>Provide an accurate and accessible COVID-19 information platform.</li>
      <li>Implement secure and validated user interactions.</li>
      <li>Demonstrate integration of software testing techniques in web applications.</li>
      <li>Enhance public awareness through a reliable digital medium.</li>
    </ul>

    <h3>👨‍💻 Project Team</h3>
    <p>
      <b>Developed By:</b><br>
      Anish Phatake (Roll No: C-10)<br>
      Sachin Chavan (Roll No: A-29)<br>
      Pruthviraj Pawar (Roll No: C-08)<br>
      Harsh Kadam (Roll No: A-44)<br>
      Under the guidance of <b>Prof. Rahul Korke</b>.
    </p>

    <h3>🏁 Future Enhancements</h3>
    <p>
      In future versions, this project can be enhanced with:
    </p>
    <ul>
      <li>Integration of real-time COVID-19 data APIs for automatic updates.</li>
      <li>User dashboard for viewing personal feedback and statistics.</li>
      <li>Admin panel for managing users and moderating comments.</li>
      <li>Mobile-friendly design using modern front-end frameworks.</li>
    </ul>
  </div>

  <?php include('includes/footer.php'); ?>
</body>
</html>

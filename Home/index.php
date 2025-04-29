<?php
  // Simulation override: if a "simulate" parameter is set, use that month; otherwise use the actual month.
  $simulatedMonth = isset($_GET['simulate']) ? ucfirst(strtolower($_GET['simulate'])) : "";
  $currentMonth = !empty($simulatedMonth) ? $simulatedMonth : date("F");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home | Kade's Portfolio</title>
  <!-- Google Fonts for a modern look -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    /* Reset & Basic Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    html, body {
      /* You can set a background image here to show behind the transparent sections */
      background-color: #121212; 
      /* Example: background: url('your-background-image.jpg') no-repeat center center/cover; */
      font-family: 'Open Sans', sans-serif;
      color: #ffffff;
      line-height: 1.6;
      overflow-x: hidden !important;
      -ms-overflow-style: none;  /* IE and Edge */
      scrollbar-width: none;  /* Firefox */
    }
    html::-webkit-scrollbar, body::-webkit-scrollbar {
      width: 0px;
      height: 0px;
      background: transparent !important;
    }

    /* Header Styling with Transparent Background */
    header {
      background: linear-gradient(to right, rgba(31,31,31,0.8), rgba(41,41,41,0.8));
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
      position: sticky;
      top: 0;
      z-index: 100;
    }
    .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
    }
    .logo h1 {
      font-family: 'Montserrat', sans-serif;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 2.5em;
      color: #ffffff;
      transition: color 0.3s ease;
    }
    .logo h1:hover {
      color: #00bcd4;
    }
    nav {
      display: flex;
      gap: 20px;
    }
    nav a {
      text-decoration: none;
      font-size: 1.2em;
      font-weight: 600;
      color: #ffffff;
      padding: 5px 10px;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    }
    nav a:hover {
      background-color: #00bcd4;
      color: #121212;
    }

    /* Hero Section w/ Transparent Background */
    .hero {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 120px 20px;
      background: linear-gradient(to right, rgba(35,37,38,0.8), rgba(65,67,69,0.8));
      color: #e0e0e0;
      box-shadow: inset 0 -20px 40px rgba(0, 0, 0, 0.5);
      position: relative;
    }
    .hero h2 {
      font-size: 3em;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .hero p {
      font-size: 1.5em;
      max-width: 800px;
      margin-bottom: 40px;
      font-weight: 300;
    }
    .hero a {
      background-color: #00bcd4;
      color: #ffffff;
      text-decoration: none;
      font-size: 1.2em;
      font-weight: bold;
      padding: 12px 24px;
      border-radius: 5px;
      transition: background-color 0.3s, box-shadow 0.3s;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }
    .hero a:hover {
      background-color: #0198a4;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.7);
    }

    /* "What I Do" Section */
    .section {
      padding: 60px 20px;
      text-align: center;
    }
    .section h3 {
      font-size: 2em;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .section p {
      font-size: 1.2em;
      max-width: 800px;
      margin: 0 auto;
      color: #b3b3b3;
    }

    /* Footer Styling with Transparent Background */
    footer {
      text-align: center;
      padding: 20px 10px;
      background: rgba(31,31,31,0.8);
      color: #b3b3b3;
      font-size: 0.9em;
      box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.6);
    }
    footer a {
      color: #00bcd4;
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }

    /* Animated Spider for Halloween:
       The container now uses translateX with keyframes to move horizontally and flips with scaleX. */
    .spider-container {
      position: fixed;
      bottom: 0;
      width: 80px;
      animation: spiderMove 10s linear infinite;
      z-index: 101;
    }
    @keyframes spiderMove {
      0%   { transform: translateX(-80px) scaleX(1); }
      45%  { transform: translateX(calc(100vw - 80px)) scaleX(1); }
      50%  { transform: translateX(calc(100vw - 80px)) scaleX(-1); }
      95%  { transform: translateX(-80px) scaleX(-1); }
      100% { transform: translateX(-80px) scaleX(1); }
    }
    .spider {
      width: 100%;
      animation: swing 3s ease-in-out infinite;
    }
    @keyframes swing {
      0%   { transform: rotate(0deg); }
      50%  { transform: rotate(15deg); }
      100% { transform: rotate(0deg); }
    }

    /* Rainbow Text Animation (for Pride fun fact) */
    .rainbow-text {
      background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
      background-size: 400%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: rainbow 4s ease-in-out infinite;
    }
    @keyframes rainbow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
  </style>
</head>
<body>
  <!-- Header Section -->
  <header>
    <div class="header-container">
      <div class="logo">
        <h1>Kade's Portfolio</h1>
      </div>
      <nav>
        <a href="about.php">About</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section with Dynamic Greetings -->
  <div class="hero">
    <?php
      if ($currentMonth === "June") {
          echo "<h2>Happy Pride Month! 🌈</h2>";
          // Array of Pride fun facts
          $pride_facts = array(
              "Did you know? The rainbow flag was designed in 1978 to represent the diversity of the LGBTQ+ community.",
              "Fun fact: Pride Month began as a commemoration of the 1969 Stonewall riots.",
              "Pride celebrates love, diversity, and the ongoing fight for equality worldwide.",
              "Did you know? Pride parades now take place in over 100 countries around the globe.",
              "Fun fact: The rainbow flag is one of the most recognized symbols of LGBTQ+ pride."
          );
          $random_fact = $pride_facts[array_rand($pride_facts)];
          echo "<p class='rainbow-text'>$random_fact</p>";
      } elseif ($currentMonth === "October") {
          echo "<h2>Happy Halloween! 🎃</h2>";
          echo "<p>Embrace the spooky vibes and festive fun!</p>";
      } else {
          echo "<h2>Welcome to My Portfolio</h2>";
          echo "<p>Explore my projects, skills, and experiences.</p>";
      }
    ?>
    <a href="projects.php">View My Work</a>
  </div>

  <!-- "What I Do" Section -->
  <div class="section">
    <h3>What I Do</h3>
    <p>
      I'm a creative and passionate professional specializing in web development,
      design, and innovation. With an eye for detail and a love for solving complex problems,
      I build responsive, user-focused digital solutions that make an impact.
    </p>
  </div>

  <!-- Footer Section -->
  <footer>
    <p>&copy; 2025 Kade | All Rights Reserved | <a href="contact.php">Contact Me</a></p>
  </footer>

  <!-- Animated Spider for Halloween (only shown if the month is October) -->
  <?php if ($currentMonth === "October") { ?>
    <div class="spider-container">
      <!-- Replace 'spider.png' with the path to your spider image -->
      <img src="spider.png" alt="Animated Spider" class="spider">
    </div>
  <?php } ?>
</body>
</html>
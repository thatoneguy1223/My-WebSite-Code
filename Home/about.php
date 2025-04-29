<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
        /* General Styling */
        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            background-color: #121212;
            color: #ffffff;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styling */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: #1f1f1f;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
        }
        header h1 {
            font-size: 2em;
            font-weight: bold;
        }
        nav a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 600;
            transition: color 0.3s ease, transform 0.2s;
        }
        nav a:hover {
            color: #00bcd4;
            transform: scale(1.1);
        }

        /* About Section Styling */
        .about-section {
            padding: 60px 20px;
            text-align: center;
            background: linear-gradient(to right, #232526, #414345);
            color: #e0e0e0;
        }
        .about-section h2 {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .about-section p {
            font-size: 1.2em;
            font-weight: 300;
            max-width: 800px;
            margin: 0 auto 20px;
        }

        /* Skills Section */
        .skills-section {
            padding: 40px 20px;
            background-color: #1e1e1e;
            text-align: center;
        }
        .skills-section h3 {
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .skills-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            padding: 0;
            margin: 0;
            list-style: none;
        }
        .skills-list li {
            background: #292929;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1.1em;
            font-weight: 500;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        }

        /* Footer Styling */
        footer {
            text-align: center;
            padding: 20px 10px;
            background: #1f1f1f;
            color: #b3b3b3;
            font-size: 0.9em;
            box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.6);
        }
        footer a {
            color: #00bcd4;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>About Me</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="contact.php">Contact</a>
            <a href="projects.php">Projects</a>
        </nav>
    </header>

    <div class="content">
        <section class="about-section" id="about">
            <h2>Who I Am</h2>
            <p>
                Hi, I'm Kade Chaney, a passionate Coder, dedicated to creating
                innovative solutions and delivering high-quality work. With a strong focus on
                Https, I strive to make a positive impact in everything I do.
            </p>
            <p>
                I believe in continuous learning and growth, and I’m always eager to take on
                exciting challenges and collaborate with like-minded individuals.
            </p>
        </section>

        <section class="skills-section" id="skills">
            <h3>My Skills</h3>
            <ul class="skills-list">
                <li>HTML & CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>python</li>
                <li>Responsive Design</li>
                <li>Graphic Design</li>
                <li>Problem-Solving</li>
                <li>Team Collaboration</li>
                <li>Project Management</li>
                <li>Version Control (Git)</li>
            </ul>
        </section>
    </div>

    <footer>
        <p>&copy; 2025 Kade Chaney | All Rights Reserved | <a href="contact.php">Contact Me</a></p>
    </footer>
</body>
</html>
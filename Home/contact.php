<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
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

        /* Contact Section Styling */
        .contact-section {
            padding: 60px 20px;
            text-align: center;
            background: linear-gradient(to right, #232526, #414345);
            color: #e0e0e0;
        }
        .contact-section h2 {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .contact-section p {
            font-size: 1.2em;
            font-weight: 300;
            margin-bottom: 30px;
        }
        .contact-link {
            display: inline-block;
            background-color: #00bcd4;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 1.2em;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .contact-link:hover {
            background-color: #0198a4;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.5);
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
        <h1>Contact Me</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="projects.php">Projects</a>
        </nav>
    </header>

    <div class="content">
        <section class="contact-section">
            <h2>Get in Touch</h2>
            <p>If you'd like to work with me or just want to say hi, feel free to reach out via email:</p>
            <a href="mailto:kadechaney@thatoneserver.org" class="contact-link">Email Me</a>
        </section>
    </div>

    <footer>
        <p>&copy; 2025 Kade Chaney | All Rights Reserved | <a href="contact.php">Contact Me</a></p>
    </footer>
</body>
</html>
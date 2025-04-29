<?php
// Array of projects
$projects = [
    [
        "title" => "3D-Rotating-Cube-Animation", 
        "description" => "This Python project visualizes a 3D rotating cube in an interactive plot window using matplotlib. It demonstrates real-time rendering of 3D transformations and showcases smooth continuous animation. The cube rotates endlessly around a defined axis, providing a mesmerizing effect suitable for educational demonstrations or creative experiments.", 
        "link" => "https://github.com/thatoneguy1223/3D-Rotating-Cube-Animation"
    ],
    [
        "title" => "ASCII Spinning Donut", 
        "description" => "Dive into the world of terminal animations with this interactive ASCII art project! This Python-based program creates a dynamic, rotating 3D donut right in your console. Using clever geometry and luminance calculations, it delivers smooth motion, realistic shading, and an engaging visual experience. Dynamic Fit: Adapts seamlessly to your terminal's dimensions, maximizing the display space. Mesmerizing Rotation: Spins elegantly along two axes for a captivating 3D effect. Graceful Controls: Easily stop the animation at any time with user input. Perfect for coding enthusiasts looking to explore mathematical projections, ASCII art, or simply add a touch of creativity to their terminal!", 
        "link" => "https://github.com/thatoneguy1223/ASCII-Spinning-Donut", 
        "link2" => "https://github.com/thatoneguy1223/ASCII-Spinning-Donut/tree/UPDATE-V1.0"
    ],
    [
        "title" => "POS-System-with-Realistic-Till-Receipt", 
        "description" => "This Python-based Point of Sale (POS) system simulates a realistic till experience, complete with cart management, tax calculation, receipt generation (saved as text files), and a comprehensive sales report. Perfect for small businesses, developers, or anyone exploring Python programming!", 
        "link" => "https://github.com/thatoneguy1223/POS-System-with-Realistic-Till-Receipt",
    ],
    [
        "title" => "My Website", 
        "description" => "This is my personal website, showcasing my projects and skills. It features a modern design with a responsive layout, ensuring a seamless experience across devices. The website includes sections for my portfolio, about me, and contact information.", 
        "link" => "https://github.com/thatoneguy1223/My-WebSite-Code",
    ],
];

// Handling the search query
$searchQuery = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : "";
$filteredProjects = [];

if (!empty($searchQuery)) {
    foreach ($projects as $project) {
        // Check if the search query matches the title or description
        if (
            strpos(strtolower($project["title"]), $searchQuery) !== false ||
            strpos(strtolower($project["description"]), $searchQuery) !== false
        ) {
            $filteredProjects[] = $project;
        }
    }
} else {
    // If no search query, show all projects
    $filteredProjects = $projects;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
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
            overflow-x: hidden; /* Prevent horizontal scrollbars */
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

        /* Search Bar Styling */
        .search-bar {
            text-align: center;
            margin: 20px 0;
        }
        .search-bar input[type="text"] {
            padding: 10px;
            font-size: 1.2em;
            width: 80%;
            max-width: 400px;
            border: 1px solid #292929;
            border-radius: 5px;
            background: #1e1e1e;
            color: #ffffff;
        }
        .search-bar input[type="submit"] {
            padding: 10px 20px;
            font-size: 1.2em;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            background-color: #00bcd4;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .search-bar input[type="submit"]:hover {
            background-color: #0198a4;
        }

        /* Project List Styling */
        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            padding: 20px;
        }
        .project {
            background-color: #1e1e1e;
            border-radius: 10px;
            overflow: hidden;
            padding: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .project:hover {
            transform: scale(1.02);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.7);
        }
        .project h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .project p {
            font-size: 1em;
            color: #b3b3b3;
        }
        .project .links {
            margin-top: 10px;
        }
        .project .links a {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 5px;
            color: #00bcd4;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 15px;
            border: 1px solid #00bcd4;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .project .links a:hover {
            background-color: #00bcd4;
            color: #121212;
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
        <h1>Projects</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <div class="content">
        <div class="search-bar">
            <form method="GET" action="">
                <input type="text" name="search" placeholder="Search projects..." value="<?php echo htmlspecialchars($searchQuery); ?>">
                <input type="submit" value="Search">
            </form>
        </div>

        <div class="projects">
            <?php if (empty($filteredProjects)): ?>
                <p style="text-align: center; font-size: 1.2em;">No projects found. Try a different search!</p>
            <?php else: ?>
                <?php foreach ($filteredProjects as $project): ?>
                    <div class="project">
                        <h3><?php echo htmlspecialchars($project["title"]); ?></h3>
                        <p><?php echo htmlspecialchars($project["description"]); ?></p>
                        <div class="links">
                            <?php
                                // Loop through each key of the project and output any keys that start with "link"
                                $linkCount = 0;
                                foreach ($project as $key => $value) {
                                    if (strpos($key, 'link') === 0 && !empty($value)) {
                                        $linkCount++;
                                        // Use default text for the first link and numbered text for extras.
                                        $btnText = ($linkCount === 1) ? "View Project" : "View Project " . $linkCount;
                                        echo '<a href="' . htmlspecialchars($value) . '" target="_blank">' . $btnText . '</a>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Kade Chaney | All Rights Reserved | <a href="contact.php">Contact Me</a></p>
    </footer>
</body>
</html>
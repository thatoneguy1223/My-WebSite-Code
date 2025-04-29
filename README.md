# Kade's Portfolio Website

A dynamic, modern portfolio website built with PHP, HTML, and CSS. This website features a professional design with dynamic greetings, animated effects, and transparent sections. The site adapts its homepage greeting based on the current month by displaying special messages for Pride (June) and Halloween (October). It also includes fun interactive elements like a rainbow-animated fun fact and a swinging spider for Halloween.

---

## Features

- **Dynamic Greetings:**
  - **June (Pride Month):**  
    Displays a "Happy Pride Month! 🌈" greeting along with a random fun fact about Pride. The fun fact text is animated with a dynamic rainbow effect.
  - **October (Halloween):**  
    Shows a "Happy Halloween! 🎃" greeting with a festive message and an animated, swinging spider that crosses the bottom of the viewport, flipping direction as it reaches the edges.
  - **Default:**  
    Displays a general welcome message for all other months.

- **Simulation Mode:**  
  Easily simulate any month by appending a query parameter to the URL (e.g., `?simulate=June` or `?simulate=October`) for testing purposes.

- **Responsive & Professional Design:**  
  - Transparent header, hero, and footer sections layered over a customizable background.
  - Sticky navigation for an enhanced user experience.
  - Uses modern typography with Google Fonts (Montserrat and Open Sans).

- **Animated Elements:**
  - Rainbow-text animation for Pride fun facts.
  - Horizontal spider animation that includes a flipping effect when it reaches the edge of the screen in Halloween mode.

- **Customizable:**
  - Easily update greetings, fun facts, and projects.
  - Replace placeholder images (e.g., `spider.png`) with your custom graphics.
  - Adjust styling and animations via the CSS included in the code.

---

## Technologies Used

- **PHP:**  
  Server-side scripting for dynamic content and simulation overrides.
- **HTML5:**  
  Markup for structuring the website content.
- **CSS3:**  
  Styling, gradients, and animations for a modern, minimal design.
- **Google Fonts:**  
  For high-quality typography with Montserrat and Open Sans.

---

## Setup & Installation

1. **Clone or Download the Repository:**
   - Use Git or download the ZIP file and extract it to your local development folder.

2. **Ensure You Have a Local Web Server:**
   - Install PHP (version 7.x or later) and a local server environment (e.g., XAMPP, WAMP, or MAMP).

3. **Place the Files in Your Web Server’s Document Root:**
   - For example, copy the project files into the `htdocs` folder (if using XAMPP).

4. **Run the Website:**
   - Open your browser and navigate to `http://localhost/[your_project_folder]/index.php`.

5. **Simulate Special Months (Optional):**
   - Append `?simulate=June` or `?simulate=October` to the URL to preview special greetings and animations.

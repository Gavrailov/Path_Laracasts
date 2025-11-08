<?php
// PHP stands for Hypertext Preprocessor.
// PHP comments must be inside the php opening/closing tags

// 1.Users requests the page --> 2.Web Server receives the request (Here the web server - Apache, Nginx, etc.) --> 3.PHP Processes the request
// 4.Database Interaction (The PHP script sends a request to the database with an SQL query, then the database processes the query and sends a response - result ) --> 
// 5.PHP responds with dynamic content (The response is returned as an HTTP response to the web browser) -->
// 6.Web Browser Receives the responses

// What is a php file? - PHP code used to create dynamic web pages. It contains HTML, CSS, JavaScript and PHP code together. It runs on a web server (Apache, Nginx)
// What can PHP do? Generate dynamic content, Can create/read/write/delete files on the server, Process Form Data (PHP collects and processes data from web forms),
// Handles cookies (receives cookies to manage sessions), Interact with databases, Control user access (PHP can manage login systems and user permissions),
// Encrypt Data (PHP can encrypt sensitive information)

// Why is PHP still popular? Widely used (runs 77% including popular sites like WordPress and Facebook), Cross-Platform: Works on Windows, Linux, macOS, 
// WordPress Backend: PHP is the foundation of WordPress, used by 75% of CMS-based websites, integrates easily - works well with HTML and JavaScript to build dynamic websites
// Fast Performance: PHP 8 introduces Just-In-Time (JIT) compilation for faster execution

// PHP is a Loosely Typed Language - meaning you do not need to specify the data type when declaring a var. PHP will automatically interpret the var type based on the value assigned
// - In PHP 7, type declarations were introduced, this allows devs to def the expected data type for function parameters.

// Key Features of PHP
// - Client-Side Scripting: 
// - Database handling: Can easily connect to databases like MySQL, PostgreSQL and SQLite alowwing efficient data storage and management in web apps
// - Simple learning curve:
// - Rich ecosystem: Laravel, Symfony
// - Scalability:
// - Asynchronous Support: PHP, through the use of libraries and frameworks like ReactPHP, supports asynchronous programming, allowing developers to handle multiple requests concurrently.

// Applications of PHP
// - Web Development: PHP is widely used for creating dynamic websites and web applications by generating interactive content, handling user inputs, and interacting with databases.
// - Command-Line Scripting: PHP can be used to write command-line scripts for automating repetitive tasks, such as data processing or system monitoring.
// - Game Development: PHP is used for backend logic in browser-based multiplayer games, handling user authentication, scores, and game state.
// - Real-Time apps: PHP + AJAX or WebSockets

// Limitations of PHP
// - Security Risks: If not used properly, PHP can be vulnerable to attacks like SQL injection, XSS, and CSRF. Developers must follow security best practices.
// - Not Ideal for Command-Line: While PHP can be run from the command line, it’s mainly designed for web development, so its performance for general-purpose tasks may not be as efficient as other languages.
// - Limited Support for Multi-threading: While PHP can handle concurrent requests by asynchronous frameworks, multi-threaded support is limited compared to languages like Java or Node.js.

echo "Fundamental Theory";

?>
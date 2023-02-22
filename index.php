<?php

// Get the current URI
$uri = $_SERVER['REQUEST_URI'];

// Remove the query string from the URI
$uri = explode('?', $uri)[0];

// Remove the trailing slash from the URI
$uri = rtrim($uri, '/');

// Define an array of routes
$routes = [
    '' => 'src/pages/home.php',
    '/profile' => 'src/pages/profile.php',
    '/register' => 'src/pages/register.php',
    '/login' => 'src/pages/login.php',
    '/logout' => 'src/pages/logout.php'
];

// Check if the current URI matches a route
if (array_key_exists($uri, $routes)) {
    // Include the appropriate file
    include 'src/includes/header.php';
    include $routes[$uri];
//    include 'src/includes/footer.php';
} else {
    // Return a 404 error
    http_response_code(404);
    echo '404 Not Found';
}
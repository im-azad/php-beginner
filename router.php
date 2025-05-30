<?php 

$uri = parse_url($_SERVER['REQUEST_URI']) ['path'];
$routes = [
 '/' => 'controllers/index.php',
 '/about' => 'controllers/about.php',
 '/contact' => 'controllers/contact.php',
 '/services' => 'controllers/services.php',  
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    abort(404);
}
}
function abort($code) {
    http_response_code($code);
    require "views/{$code}.view.php";
    die();
}

routeToController($uri, $routes);


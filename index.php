<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];


dd($uri);

if($uri === '/') {
    require 'controllers/index.php';
} else if($uri === '/about') {
    require 'controllers/about.php';
} else if($uri === '/contact') {
    require 'controllers/contact.php';
} else if($uri === '/services') {
    require 'controllers/services.php';
} else {
    http_response_code(404);
    require 'views/404.view.php';
}
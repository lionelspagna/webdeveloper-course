<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//FRONT CONTROLLER

//global libraries
require_once 'model.php';
require_once 'controllers.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

function page_not_found(string $html = ''): string {
    header('HTTP/1.1 404 Not Found');
    $notFoundHtml = "<html><body><p>Page not found</p></body></html>";
    if($html === '') echo $notFoundHtml;
    return $notFoundHtml;
}

echo $uri;

match($uri) {
    '/' => list_action(),
    '/index.php' => list_action(),
    '/index.php/show', '/show.php', isset($_GET['id']) => show_action($_GET['id']),
    default => page_not_found()
};
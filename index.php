<?php

$content = array();
include('config.php');
include('functions.php');

if (!isset($_SERVER['REQUEST_URI'])) {
    $_SERVER['REQUEST_URI'] = '/index';
} elseif (substr($_SERVER['REQUEST_URI'], -1) == '/') {
    $_SERVER['REQUEST_URI'] .= 'index';
} elseif (is_dir('pages' . $_SERVER['REQUEST_URI'])) {
    $_SERVER['REQUEST_URI'] .= 'index';
}
$page = 'pages' . $_SERVER['REQUEST_URI'] . '.php';

if (file_exists($page)) {
    ob_start();
    include($page);
    $content['default'] = ob_get_contents();
    ob_end_clean();
} else {
    header('HTTP/1.0 404 Not Found');
    include('404.html');
    die();
}

include('layouts/application.php');

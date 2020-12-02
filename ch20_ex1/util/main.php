<?php
// Get the document root
$doc_root = $_SERVER['DOCUMENT_ROOT'];

// Get the application path
//$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);;
//$dirs = explode('/', $uri);
//$app_path = '/' . $dirs[1] . '/' . $dirs[2] . '/';
$app_path = '/';

// Set the include path
set_include_path($doc_root . $app_path);

// Start session to store user and cart data
// session_start();
?>
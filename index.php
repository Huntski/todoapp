<?php

// error_reporting(0);
// ini_set('display_errors', 0);

session_start();

require "functions.php";
$routes = getRoutes();
$error = null;
$request = isset($routes[0]) ? $routes[0] : 'page404';
$folder = 'templates/';
$data_request = false;
$GLOBALS['uri'] = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
$GLOBALS['url'] = $_SERVER['REQUEST_URI'];
$uri = $GLOBALS['uri'];
$url = $GLOBALS['url'];

// -------------------------------------------------------------------

// ====== Posts

if (count($_POST)) {

    if (isset($_POST['usern'], $_POST['passw']) && $_POST['usern'] != '' && $_POST['passw'] != '')
        $error = login($_POST['usern'], $_POST['passw']);

    if (isset($_POST['reset__submit']))
        $error = 'Email send successfully!';

}

// ====== Gets

if ($request == 'logout') {
    session_destroy();
    header('Refresh: 2');
    header('location: ./');
    exit;
}

if (isset($_SESSION['ssid']) && validSSID($_SESSION['ssid'])) {

    $allowed = [
        'home' => 'home',
        'patients' => 'patients',
        'search' => 'search',
        'patient' => 'patient/patient'
    ];

    if ($request === 'search') $data_request = true;
}
else {
    $allowed = [
        'home' => 'login',
        'forgot' => 'forgot'
    ];
}

if ($request != 'page404')
    if (!in_array($request, $allowed))
        $request = $allowed[$request];

// -------------------------------------------------------------------

if (!$data_request) include $folder . "header.php";
include $folder . $request . '.php';
if (!$data_request) include $folder . "footer.php";

// ------------------------------------------------------------------
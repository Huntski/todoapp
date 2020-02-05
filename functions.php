<?php

// ---------------------------------------------------------------------------

function login ($usern, $passw) {
    $usern = filter_var($usern, FILTER_SANITIZE_STRING);
    $users = getUsers();
    $userFound = false;

    foreach ($users as $user) {
        if ($user->usern == $usern) {
            $userFound = true;
            if (password_verify($_POST['passw'], $user->passw)) {
                $_SESSION['ssid'] = $user->ssid;
                if (!isset($_POST['remember']))
                    ini_set('session.gc_maxlifetime', 1500);
                header("location: ./");
                exit;
            }
            return "Password incorrect.";
        }
    }

    if (!$userFound) {
        return "Username incorrect.";
    }
}

// ---------------------------------------------------------------------------

function validSSID ($ssid) {
    $users = getUsers();
    foreach ($users as $user) {
        if ((string) $user->ssid == (string) $_SESSION['ssid']) {
            return true;
        } else {
            header('./logout');
            exit;
        }
    }
}

// ---------------------------------------------------------------------------

function getRoutes () {
    // $uri = str_replace("/school/todoapp/", '', $_SERVER['REQUEST_URI']);
    $uri = str_replace("/todoapp/", '', $_SERVER['REQUEST_URI']);
    if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
    $uri = '/' . trim($uri, '/');
    $uri_routes = array();
    $uri_routes = explode('/', $uri);
    $routes = array();

    foreach($uri_routes as $route)
        if(trim($route))
            array_push($routes, $route);

    if (!count($routes)) array_push($routes, 'home');
    return $routes;
}

// ---------------------------------------------------------------------------

function getPatients () {
    return json_decode(file_get_contents('patients.json', true))->patients;
}

// ---------------------------------------------------------------------------

function getUsers () {
    return json_decode(file_get_contents('users.json', true))->users;
}

// ---------------------------------------------------------------------------

function getTodos($id) {
    $todos__json = json_decode(file_get_contents('patients_todo.json', true));
    $patients = getPatients();
    $result = null;

    for($i = 0; $i < count($patients); $i++)
    {
        foreach ($todos__json as $item)
        {
            if ($patients[$i]->id == $item->id) {
                $result = $item->todo;
                break;
            }
        }
    }

    // echo "<pre>";

    // var_dump($result);
    // die();
    return $result;
}
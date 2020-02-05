<?php
    $nopes = ['today', 'year', 'task'];
    $patient_url = $url;
    foreach($nopes as $nope) {
        $patient_url = explode('/'.$nope, $patient_url)[0];
    }

    $todos = getTodos($routes[1]);
    if (!$todos) :
        ?><h1>No patient found</h1><?php
    endif;
?>

<div class="view-patient__container">
    <?php
    $file = 'today';
    if (isset($routes[2])) {
        switch ($routes[2]) {
            case 'year':
                $file = 'year';
                break;
            case 'task':
                $file = 'task';
                $todo;
                if (!isset($routes[3])) die('task in url not found');
                foreach ($todos as $todos__todo) {
                    if ($todos__todo->id == $routes[3]) $todo = $todos__todo;
                }
                if (!$todo) die('task not found');
                break;
        }
    }


    include $folder . 'patient/' . $file . '.php';
    ?>
</div>
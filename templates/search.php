<?php

if (isset($routes[1])) {
    $query = strtolower(filter_var($routes[1], FILTER_SANITIZE_STRING));
    $query = str_replace('%20', ' ', $routes[1]);
} else {
    $query = '';
}

$response = [];
$patients = getPatients();

if ($query == '') {
    $response = getPatients();
} else {
    foreach ($patients as $patient) {
        $name = strtolower($patient->firstname.' '.$patient->tussenvoegsels.' '.$patient->lastname);
        if (strpos($name, $query) !== false)
            array_push($response, $patient);
    }
}

if (count($response)) :
    foreach ($response as $patient) :
        ?>
        <div class="patient">
            <div class="patient__image">
                <img src="img/patients/<?=$patient->image?>" alt="<?=$patient->image?>">
            </div>
            <h3 class="patient__name"><?=$patient->firstname.' '.$patient->tussenvoegsels.$patient->lastname?></h3>
        </div>
        <?php
    endforeach;
else :
    ?><h1>No one with that name found.</h1><?php
endif;
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do app | login</title>
    <link rel="stylesheet" href="<?=$uri?>css/reset.css">
    <link rel="stylesheet" href="<?=$uri?>css/style.css">
    <?php
    $stylesheets = [
        'login' => 'login',
        'forgot' => 'login',
        'home' => 'home',
        'patient/patient' => 'patient'
    ];

    if ($request != 'page404') :
        ?><link rel="stylesheet" href="<?=$uri?>css/<?=$stylesheets[$request]?>.css"><?php
    endif;

    ?>
</head>
<body>
    <div class="phone">
        <div class="loading"></div>
        <main class="main">
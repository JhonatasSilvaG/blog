<?php

function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function loadView($view, $data = []) {
    extract($data);

    require 'views/partials/header.php';

    require 'views/partials/nav.php';

    require $view;

    require 'views/partials/footer.php';
}
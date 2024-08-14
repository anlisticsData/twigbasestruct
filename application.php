<?php

require_once 'vendor/autoload.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

$loader = new \Twig\Loader\FilesystemLoader('resources/');
$twig = new \Twig\Environment($loader, [
    'cache' =>false,
]);
$twig->addGlobal('session', $_SESSION);

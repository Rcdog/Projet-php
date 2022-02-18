<?php
include_once __DIR__ . '/function.php';
include_once __DIR__ . '/models/SimpleOrm.php';
$conn = new mysqli('localhost', 'root', 'root');

if ($conn->connect_error)
    die(sprintf('Imposible de se connecter a la base de donnée'));

SimpleOrm::useConnection($conn, 'projet_php');

if (!empty($_GET['route'])) $route = $_GET['route'];

else $route = 'home';

switch ($route) {
    case 'home':
        include __DIR__ . '/controllers/home-controller.php';
        break;
    case 'liste-articles':
        include __DIR__ . '/controllers/liste-articles-controller.php';
        break;
    case 'details-articles':
        include __DIR__ . '/controllers/details-articles-controller.php';
        break;
}

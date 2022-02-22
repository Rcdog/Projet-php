<?php

session_start();

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
    case 'ajout-articles':
        include __DIR__ . '/controllers/ajout-articles-controller.php';
        break;
    case 'ajout-articles-handler':
        include __DIR__ . '/controllers/ajout-articles-handler-controller.php';
        break;
    case 'modif-articles':
        include __DIR__ . '/controllers/modif-articles-controller.php';
        break;
    case 'supp-articles':
        include __DIR__ . '/controllers/supp-articles-controller.php';
        break;
    case 'connexion':
        include __DIR__ . '/controllers/connexion-controller.php';
        break;
    case 'connexion-handler';
        include __DIR__ . '/controllers/connexion-handler-controller.php';
        break;
    case 'deconnexion';
        include __DIR__ . '/controllers/deconnexion-controller.php';
        break;
}

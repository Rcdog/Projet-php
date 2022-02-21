<?php
function erreur(int $code = 500)
{
    echo 'Erreur ' . $code;
    die;
}

function redirection($route)
{
    header('Location: index.php?route=' . $route);
    die;
}

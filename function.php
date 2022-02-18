<?php
function erreur(int $code = 500)
{
    echo 'Erreur ' . $code;
    die;
}

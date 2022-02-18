<?php

include_once __DIR__ . '/models/SimpleOrm.php';
$conn = new mysqli('localhost', 'root', 'root');

if ($conn->connect_error)
    die(sprintf('Imposible de se connecter a la base de donnée'));

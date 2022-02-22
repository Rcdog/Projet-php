<?php

require_once __DIR__ . '/SimpleOrm.php';

class Utilisateur extends SimpleOrm
{
    public $id, $pseudo, $email, $mot_de_passe, $identifiant;
}

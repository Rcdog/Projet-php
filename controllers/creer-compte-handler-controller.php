<?php

if (
    !empty($_POST['login'])
    && !empty($_POST['password'])
    && !empty($_POST['pseudo'])
    // && !empty($_POST['avatar'])


) {
    $passhash = password_hash($_POST['password'], PASSWORD_DEFAULT);


    include __DIR__ . '/../models/Utilisateur.php';

    $utilisateur = new Utilisateur;

    $utilisateur->identifiant = $_POST['login'];
    $utilisateur->mot_de_passe = $passhash;
    $utilisateur->pseudo = $_POST['pseudo'];
    // $utilisateur->avatar = $_POST['avatar'];

    $utilisateur->save();
    redirection('connexion');
} else redirection('creer-compte');

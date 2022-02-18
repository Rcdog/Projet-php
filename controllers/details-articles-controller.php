<?php

if (empty($_GET['id'])) erreur(404);


require_once __DIR__ . '/../models/Article.php';
$articles = Article::retrieveByPK($_GET['id']);

if (empty($articles)) erreur(404);

require_once __DIR__ . '/../views/details-article.php';

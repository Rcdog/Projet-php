<?php
if (empty($_GET['id'])) erreur(404);


require_once __DIR__ . '/../models/Article.php';
$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) erreur(404);

if (!empty($_POST)) {

    if (
        !empty($_POST['titre'])
        && !empty($_POST['image'])
        && !empty($_POST['auteur'])
        && !empty($_POST['contenu'])
        && filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false
    ) {
        require_once __DIR__ . '/../models/Article.php';


        $article->titre = $_POST['titre'];
        $article->image = $_POST['image'];
        $article->auteur = $_POST['auteur'];
        $article->contenu = $_POST['contenu'];

        $article->save();

        redirection('liste-articles');
    }
}


include __DIR__ . '/../views/modif-articles.php';

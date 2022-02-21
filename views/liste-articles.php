<?php include __DIR__ . '/parties/header.php'; ?>

<h1>Tous met super article</h1>

<div class='row'>
    <?php foreach ($articles as $article) { ?>
        <div class="card col-3">
            <img class="card-img-top img-thumbnail" src="<?= $article->image ?>" alt="image article">
            <div class="card-body">
                <h2 class="card-title"><?= $article->titre ?> </h2>
                <p class="card-text">fait par <?= $article->auteur ?> </p>
                <p class="card-text">
                    <a class="text-align-right" href="index.php?route=details-articles&id=<?= $article->id ?>">Voir plus</a>
                    <br>
                    <br>
                    <a class="text-align-right" href="index.php?route=modif-articles&id=<?= $article->id ?>">modifier</a>
                    <a class="text-align-right" href="index.php?route=supp-articles&id=<?= $article->id ?>">supprimer</a>
            </div>
        </div>
    <?php } ?>
</div>
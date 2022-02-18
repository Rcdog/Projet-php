<?php include __DIR__ . '/parties/header.php'; ?>

<h1>Tous met super article</h1>

<div class='row'>
    <?php foreach ($articles as $article) { ?>
        <div class="card col-3">
            <img class="card-img-top img-thumbnail" src="<?= $article->image ?>" alt="image article">
            <div class="card-body">
                <h2 class="card-title"><?= $article->titre ?> </h2>
                <p class="card-text">fait par <?= $article->auteur ?> </p>
            </div>
        </div>
    <?php } ?>
</div>
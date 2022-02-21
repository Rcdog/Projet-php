<?php include __DIR__ . '/parties/header.php'; ?>

<h1><?= $article->titre ?></h1>

<div class="row">
    <div class="col-4">
        <img src="<?= $article->image ?>" alt="" class="img-fluid thumbnail">
    </div>

    <div class="col-8">
        <dl>
            <dt>Auteur</dt>
            <dd><?= $article->auteur ?></dd>

            <dt>publication</dt>
            <dd><?= $article->date_de_publication ?></dd>

            <dt>text</dt>
            <dd><?= $article->contenu ?></dd>
        </dl>
    </div>
</div>

<?php include __DIR__ . '/parties/footer.php';

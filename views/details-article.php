<?php include __DIR__ . '/parties/header.php'; ?>

<h1><?= $articles->titre ?></h1>

<div class="row">
    <div class="col-4">
        <img src="<?= $articles->image ?>" alt="" class="img-fluid thumbnail">
    </div>

    <div class="col-8">
        <dl>
            <dt>Auteur</dt>
            <dd><?= $articles->auteur ?></dd>

            <dt>publication</dt>
            <dd><?= $articles->date_de_publication ?></dd>

            <dt>text</dt>
            <dd><?= $articles->contenu ?></dd>
        </dl>
    </div>
</div>

<?php include __DIR__ . '/parties/footer.php';

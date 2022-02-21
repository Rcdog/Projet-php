<?php include __DIR__ . '/parties/header.php'; ?>

<h1>Ajouter un article</h1>

<form method="post" action="index.php?route=ajout-articles-handler">
    <div class="form-group row">
        <label for="nom" class="col-sm-12 col-form-label">Titre de l'article</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre de l'article" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="image" class="col-sm-12 col-form-label">Image</label>
        <div class="col-sm-12">
            <input type="url" class="form-control" name="image" id="image" placeholder="Image" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="prix" class="col-sm-12 col-form-label">Auteur</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="auteur" id="auteur" placeholder="Auteur" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="stock" class="col-sm-12 col-form-label">Text</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="contenu" id="contenu" placeholder="Text" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
</form>

<?php include __DIR__ . '/parties/footer.php';

<?php include __DIR__ . '/parties/header.php'; ?>

<h1>Création de compte</h1>

<form method="post" action="index.php?route=creer-compte-handler">
    <div class="form-group row">
        <label for="login" class="col-sm-12 col-form-label">Identifiant</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="login" id="login" placeholder="Identifiant" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-12 col-form-label">Mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="pseudo" class="col-sm-12 col-form-label">Pseudo</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="pseudo" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="avatar" class="col-sm-12 col-form-label">Avatar</label>
        <div class="col-sm-12">
            <input type="url" class="form-control" name="avatar" id="avatar" placeholder="avatar url" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Creer</button>
        </div>
    </div>
</form>
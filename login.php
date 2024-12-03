<?php
require_once 'templates/header.php';
?>

<div class="form-signin w-100 m-auto">
    <form method="post">
        <h1 class="mb-3 fw-normal">Se connecter</h1>

        <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Votre email">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Votre mot de passe">
            <label name="password" for="floatingPassword">Mot de passe</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Se connecter</button>
    </form>
</div>

<?php
require_once 'templates/footer.php';
?>
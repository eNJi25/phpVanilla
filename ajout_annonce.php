<?php
require_once 'templates/header.php';
require_once 'libs/category.php';

$categories = getCategories();
?>

<div class="form-listing w-100 m-auto">
    <h1>Ajouter une annonce</h1>

    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label" for="title">Titre</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Prix</label>
            <input class="form-control" type="number" name="price" id="price">
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-control" cols="30" rows="3" name="description" id="description"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="category">Catégorie</label>
            <select name="category" id="category" class="form-select">
                <?php foreach ($categories as $key => $category) { ?>
                    <option value="<?= $key ?>"><?= $category["name"] ?></option>
                <?php } ?>

            </select>
        </div>
        <input class="btn btn-primary w-100" type="submit" value="Enregistrer">
    </form>
</div>


<?php
require_once 'templates/footer.php';
?>
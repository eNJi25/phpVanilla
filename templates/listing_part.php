    <div class="col-md-4 my-2 d-flex justify-content-center">
        <div class="card w-100">
            <img src="uploads/listing/<?= $listing["image"] ?>" class="card-img-top" alt="<?= $listing["title"] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $listing["title"] ?></h5>
                <p class="card-text"><?= $listing["price"] ?> €</p>
                <a href="#" class="btn btn-primary stretched-link">Voir l'annonce</a>
            </div>
        </div>
    </div>
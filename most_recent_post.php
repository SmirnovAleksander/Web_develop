<a>
    <div class="card-conteiner">
    <img src="<?= $row['image_url'] ?>" alt="IMAGE"  class="image-block-card">
        <div class="card-line"></div>
        <div class="card-title">
            <p class="card-title__name"><?= $row['title'] ?></p>
            <p class="card-title__description"> <?= $row['subtitle'] ?></p>
        </div>
        <div class="card-line"></div>
        <div class="card-footer-conteiner">
            <img class="card-img" src="<?= $row['author_url'] ?>" alt="<?= $row['author'] ?>">
            <div class='card-footer-block'>
                <p class="card-name"><?= $row['author'] ?></p>
                <p class="card-date"><?= date("m/d/Y", 1443139200) ?></p>
            </div>
        </div>
    </div>
</a>
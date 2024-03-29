<a href="/post?id=<?= $post['id'] ?>">
    <div class="big-card">
        <img src="<?= $post['back-img'] ?>" alt="<?= $post['title'] ?>">
        <div class="big-card_conteiner">
            <p class="big-card__title"><?= $post['title'] ?></p>
            <p class="big-card__title__under">
                <?= $post['subtitle'] ?>
            </p>
            <div class="big-card__footer__conteiner">
                <img class="big-card-img" src=<?= $post['img_modifier'] ?> alt="Men1">
                <div class="big-card-footer_block">
                    <p class="big-card-name"><?= $post['author'] ?></p>
                    <p class="big-card-date"><?= $post['date'] ?></p>
                </div>
            </div>
        </div>
        <p class="big-card-button <?= $post['class-color-btn'] ?>">
            <?= $post['title-btn'] ?>
        </p>
    </div>
</a>
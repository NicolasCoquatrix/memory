<?php require 'templates/inc.top.html.php'; ?>
<?php $icrementImage = 0 ?>

<div class="container">
    <div class="row boardgame">
        <?php foreach($difficulties as $difficultie): ?>
            <div class="col-12 col-md-4 p-4">
                <div class="card welcome-card">
                    <div class="card-flip">
                        <div class="card-back d-flex flex-column justify-content-center">
                            <h2 class="color_main_light"><?= $difficultie["difficulty_name"] ?></h3>
                            <img src="../images/card.png" class="card-img-top" alt="Dos de carte difficulté <?= $difficultie["difficulty_name"] ?>">
                        </div>
                        <div class="card-front d-flex flex-column justify-content-center">
                            <a href="/<?= $difficultie["difficulty_link"] ?>.php" alt="Difficulté <?= $difficultie["difficulty_link"] ?>">
                                <h2 class="color_main"><?= $difficultie["difficulty_name"] ?></h3>
                                <img src="<?= $cards[$icrementImage]['card_image'] ?>" class="card-img-top" alt="<?= $cards[$icrementImage]['card_name'] ?>">
                                <h2 class="text-shadow" style="color: #<?= $cards[$icrementImage]['card_color'] ?>">Jouer</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php $icrementImage += 1;
        endforeach; ?>
    </div>
</div>

<?php require 'templates/inc.bottom.html.php'; ?>
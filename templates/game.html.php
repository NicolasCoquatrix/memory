<?php require 'templates/inc.top.html.php'; ?>

<div class="container">
    <div class="row boardgame">
        <?php for($i=0;$i<2;$i++):
        foreach($cards as $card): ?>
        <div class="card-container col-4 col-md-3 col-lg-2 mb-4 hidden">
            <div class="card playing-card">
                <div class="card-flip ">
                    <div class="card-back d-flex flex-column justify-content-center">
                        <img src="../images/card.png" class="card-img-top" alt="Dos de carte">
                    </div>
                    <div class="card-front d-flex flex-column justify-content-center">
                        <img src="<?= $card['card_image'] ?>" class="card-img-top" alt="<?= $card['card_name'] ?>">
                        <h3 class="text-shadow" style="color: #<?= $card['card_color'] ?>"><?= $card['card_name'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;
        endfor; ?>
    </div>
</div>

<?php require 'templates/inc.bottom.html.php'; ?>
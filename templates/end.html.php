<?php require 'templates/inc.top.html.php'; ?>

<div class="container">
    <div class="boardgame d-flex flex-column align-items-center">
        <div class="col-12 col-md-8 col-xl-6 mb-4">
            <div class="card end-card text-center p-4">
                <h1>Félicitation !</h1>
                <p>Vous avez terminé le mode <span class="stats"><?= strtolower($myScore["difficulty_name"]) ?></span> en <span class="stats"><?= $myScore["score_moves"] ?></span> coups et en <span class="stats"><?php if(!empty($myTimeHours)){ echo $myTimeHours; };  if(!empty($myTimeMinutes)){ echo $myTimeMinutes; }; if(!empty($myTimeSecondes)){ echo $myTimeSecondes; };?>.</p>
                <form action="/scripts/add_nickname.php" method="post" class="d-flex flex-column align-items-center">
                    <div class="mb-4">
                        <label for="pseudo" class="form-label h4">Pseudo :</label>
                        <input type="text" id="pseudo" name="pseudo" class="form-control text-center" placeholder="<?= $myScore["score_name"] ?>" maxlength="20" minlength="3">
                    </div>
                    <button class="btn btn-main" type="submit">Voir le classement</button>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-8 col-xl-6">
            <a href="/" class="card end-card end-card-link text-center p-4">
                <h2 class="mb-0">Retour à l'accueil</h1>
            </a>
        </div>
    </div>
</div>

<?php require 'templates/inc.bottom.html.php'; ?>
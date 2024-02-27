<?php require 'templates/inc.top.html.php'; ?>

<div class="container">
    <div class="boardgame d-flex flex-column align-items-center">
        <div class="col-12 col-md-8 col-xl-6">
            <div class="card end-card text-center d-flex align-items-center mb-4 p-4">
                <h1>Classement</h1>
                <table class="table table-bordered col-12 col-md-4 mb-0">
                    <thead class="table-main-dark">
                        <tr>
                            <th>Pseudo</th>
                            <th>Classement</th>
                            <th>Coups</th>
                            <th>Temps</th>
                        </tr>
                    </thead>
                    <tbody class="table-main-light">
                        <?php foreach($scores as $score): ?>
                        <tr class="<?php if($score["score_id"] === $myScore["score_id"]){echo 'fw-bold';} ?>">
                            <td><?= $score["score_name"] ?></td>
                            <td>#<?= $score["ranking"] ?></td>
                            <td><?= $score["score_moves"] ?></td>
                            <td><?= timeCalcul($score["score_time"]) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot class="table-main-dark">
                        <tr class="fw-bold">
                            <td><?= $myScore["score_name"] ?></td>
                            <td>#<?= $myScore["ranking"] ?></td>
                            <td><?= $myScore["score_moves"] ?></td>
                            <td><?= timeCalcul($myScore["score_time"]) ?></td>
                        </tr>
                    </tfoot>
                </table>
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
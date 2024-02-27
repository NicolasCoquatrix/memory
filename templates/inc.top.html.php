<!doctype html>
<html lang="fr">
    <head>
        <title>Memory | <?= $title ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand">
                <div class="container">
                    <a class="navbar-brand" href="/">Memory</a>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav navbar-left me-auto mt-2 mt-lg-0 d-none d-md-flex">
                            <li class="nav-item">
                                <a class="nav-link <?php if($title==$difficulties[0]["difficulty_name"]){ ?> active-link <?php }; ?>" href="/<?= $difficulties[0]["difficulty_link"] ?>.php" aria-current="page"><?= $difficulties[0]["difficulty_name"] ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($title==$difficulties[1]["difficulty_name"]){ ?> active-link <?php }; ?>" href="/<?= $difficulties[1]["difficulty_link"] ?>.php" aria-current="page"><?= $difficulties[1]["difficulty_name"] ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($title==$difficulties[2]["difficulty_name"]){ ?> active-link <?php }; ?>" href="/<?= $difficulties[2]["difficulty_link"] ?>.php" aria-current="page"><?= $difficulties[2]["difficulty_name"] ?></a>
                            </li>
                        </ul>
                        <?php if($title != "Accueil" && $title != "Félicitation" && $title != "Classement"): ?>
                        <ul class="navbar-nav navbar-right ms-auto mt-2 mt-lg-0 d-md-flex">
                            <li class="nav-item">
                                <div class="nav-link d-flex justify-content-between align-items-center">
                                    <p class="p-2 mb-0">Coups :</p>
                                    <p class="p-2 rounded bg-main mb-0 moves">0</p>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link d-flex justify-content-between align-items-center timer-box">
                                    <p class="p-2 mb-0">Temps :</p>
                                    <div class="p-2 rounded bg-main mb-0 d-flex">
                                        <p class="timer hours mb-0 hidden">00</p>
                                        <p class="timer mb-0 hidden"> : </p>
                                        <p class="timer minutes mb-0 hidden">00</p>
                                        <p class="timer mb-0 hidden"> : </p>
                                        <p class="timer seconds mb-0">00</p>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link d-flex justify-content-between align-items-center">
                                    <p class="p-2 mb-0">Difficulté :</p>
                                    <h1 class="nav-link p-2 rounded bg-main mb-0"><?= $title ?></h1>
                                </div>
                            </li>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
            
        </header>

        <main class="py-4">
<?php
session_start();
$pages = array(
    'home.php' => 'Página Inicial',
    'history.php' => 'Histórico',
    'credits.php' => 'Créditos',
);

if(!isset($_SESSION['superverse_uid_google'])){
    unset($pages['history.php']);
}
?>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="imgs/logo-superverse2.png" class="logo-navbar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                <?php foreach ($pages as $pageUrl => $pageTitle) : ?>
                <a class="nav-link <?= ((basename($_SERVER['PHP_SELF']) == $pageUrl) ? 'active' : '') ?>"
                    href="<?= $pageUrl; ?>"><?= $pageTitle; ?></a>
                <?php endforeach; ?>

                <button class="button button-login-logout" onclick="window.location.href='logout.php'">SAIR</button>
            </div>
        </div>
    </nav>

</body>
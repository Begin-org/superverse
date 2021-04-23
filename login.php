<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superverse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container-login">
        <img src="imgs/logo-superverse.png" class="logo-superverse-login">
        <p class="text-superverse-login">
        O Superverse é um simples jogo de batalhas de habilidades entre mais de 700 heróis e vilões, de diversos universos.
        </p>
        <button class="button-login-google">
            <img class="logo-google-button" src="imgs/google-logo.svg">
            <p>login com o google</p>
        </button>
        <p class="mt-3">
            Ou <span>jogue sem logar<span>
        </p>
        <h3>
            Alguns personagens presentes no Superverse
        </h3>
        <div class="tab-content mt-3" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-characteres1" role="tabpanel" aria-labelledby="pills-characteres1-tab">
                <div class="tab-characteres">
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/639.jpg" class="img-character-login">
                        <p class="name-character-login">Batman</p>
                    </div>
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/10522.jpg" class="img-character-login">
                        <p class="name-character-login">One Punch Man</p>
                    </div>
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/928.jpg" class="img-character-login">
                        <p class="name-character-login">Loki</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-characteres2" role="tabpanel" aria-labelledby="pills-characteres2-tab">
                <div class="tab-characteres">
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/10560.jpg" class="img-character-login">
                        <p class="name-character-login">Indiana Jones</p>
                    </div>
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/10878.jpg" class="img-character-login">
                        <p class="name-character-login">Harry Potter</p>
                    </div>
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/10404.jpg" class="img-character-login">
                        <p class="name-character-login">James Bond</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-characteres3" role="tabpanel" aria-labelledby="pills-characteres3-tab">
                <div class="tab-characteres">
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/10444.jpg" class="img-character-login">
                        <p class="name-character-login">Darth Vader</p>
                    </div>
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/96.jpg" class="img-character-login">
                        <p class="name-character-login">Medusa</p>
                    </div>
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/10330.jpg" class="img-character-login">
                        <p class="name-character-login">Donatello</p>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="mark-slide-characteres active" id="pills-characteres1-tab" data-bs-toggle="pill" data-bs-target="#pills-characteres1" type="button" role="tab" aria-controls="pills-characteres1" aria-selected="true"></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="mark-slide-characteres" id="pills-characteres2-tab" data-bs-toggle="pill" data-bs-target="#pills-characteres2" type="button" role="tab" aria-controls="pills-characteres2" aria-selected="false"></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="mark-slide-characteres" id="pills-characteres3-tab" data-bs-toggle="pill" data-bs-target="#pills-characteres3" type="button" role="tab" aria-controls="pills-characteres3" aria-selected="false"></button>
            </li>
        </ul>
        
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
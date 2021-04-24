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
    
    <?php include("topbar.php"); ?>

    <div class="container-history">
        <p class="text-your-history col-12">Este é seu histórico de partidas</p>
        <!-- exemplo item vitória -->
        <a class="item-history item-history-victory col-12 col-sm-10" data-bs-toggle="collapse" href="#collapse-item-history1" role="button" aria-expanded="false" aria-controls="collapseExample">
            <div class="own-character-history col-12 col-sm-5">
                <img src="https://www.superherodb.com/pictures2/portraits/10/100/10060.jpg">
                <p class="name-own-character-history">A-Bomb</p>
            </div>
            <div class="col-12 col-sm-2 vs-superverse-history">
                <img src="imgs/vs-superverse.png">
            </div>
            <div class="opposing-character-history col-12 col-sm-5">
                <p class="name-opposing-character-history">Abe Sapien</p>
                <img src="https://www.superherodb.com/pictures2/portraits/10/100/956.jpg">
            </div>
            
        </a>
        <div class="collapse collapse-item-history collapse-item-history-victory col-12 col-sm-10" id="collapse-item-history1">
            <p class="text-victory-history col-12">Vitória.</p>
            <span class="text-data-match col-12">Partida realizada em 23/04/2021 - 11:19</span>
        </div>
        <!-- exemplo item derrota -->
        <a class="item-history item-history-defeat col-12 col-sm-10" data-bs-toggle="collapse" href="#collapse-item-history2" role="button" aria-expanded="false" aria-controls="collapseExample">
            <div class="own-character-history col-12 col-sm-5">
                <img src="https://www.superherodb.com/pictures2/portraits/10/100/10060.jpg">
                <p class="name-own-character-history">A-Bomb</p>
            </div>
            <div class="col-12 col-sm-2 vs-superverse-history">
                <img src="imgs/vs-superverse.png">
            </div>
            <div class="opposing-character-history col-12 col-sm-5">
                <p class="name-opposing-character-history">Abe Sapien</p>
                <img src="https://www.superherodb.com/pictures2/portraits/10/100/956.jpg">
            </div>
            
        </a>
        <div class="collapse collapse-item-history collapse-item-history-defeat col-12 col-sm-10" id="collapse-item-history2">
            <p class="text-defeat-history col-12">Derrota.</p>
            <span class="text-data-match col-12">Partida realizada em 23/04/2021 - 11:19</span>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
</body>
</html>
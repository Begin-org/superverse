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
    <div class="modal" id="modal-vs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-4">
                        <div class="chosen-character" id="chosen-character">
                            <img src="https://www.superherodb.com/pictures2/portraits/10/100/10060.jpg">
                            <p class="name-chosen">A-Bomb</p>
                            <p class="skill-chosen">Força: xx</p>
                        </div>
                    </div>
                    <div class="col-4 center-col-modal">
                        <img src="imgs/vs-superverse.png" class="vs-superverse">
                    </div>
                    <div class="col-4">
                        <div class="opposing-character" id="opposing-character">
                            <img src="https://www.superherodb.com/pictures2/portraits/10/100/956.jpg">
                            <p class="name-opposing">Abe Sapien</p>
                            <p class="skill-opposing">Força: xx</p>
                        </div>
                    </div>
                    <div class="col-12" id="lost-won-phrase">
                        <p class="phrase-won-lost">
                            A-Bomb perdeu essa luta para Abe Sapien
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include("topbar.php"); ?>

    <div class="container-home">
        <p class="text mt-4 mb-0 col-12">Selecione algum personagem na lista abaixo</p>
        <p class="text col-12 d-flex mt-2 mb-5">Se preferir: 
            <button type="button" class="button-sort ms-2" onclick="modalVs()">
                <img src="imgs/btn-sort.png">
                <span class="span-sort">SORTEAR</span>
            </button>
        </p>
        <div class="container-characteres-home col-12 col-md-8">
            <div class="col-12 col-md-6 col-lg-4 ps-2">
                <div class="container-character-home p-3">
                    <img src="https://www.superherodb.com/pictures2/portraits/10/100/10060.jpg">
                    <div class="data-character">
                        <span class="name-character-home">A-Bomb</span>
                        <span class="origin-character-home">Marvel Comics</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ps-2">
                <div class="container-character-home p-3">
                    <img src="https://www.superherodb.com/pictures2/portraits/10/100/10060.jpg">
                    <div class="data-character">
                        <span class="name-character-home">A-Bomb</span>
                        <span class="origin-character-home">Marvel Comics</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ps-2">
                <div class="container-character-home p-3">
                    <img src="https://www.superherodb.com/pictures2/portraits/10/100/10060.jpg">
                    <div class="data-character">
                        <span class="name-character-home">A-Bomb</span>
                        <span class="origin-character-home">Marvel Comics</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ps-2">
                <div class="container-character-home p-3">
                    <img src="https://www.superherodb.com/pictures2/portraits/10/100/10060.jpg">
                    <div class="data-character">
                        <span class="name-character-home">A-Bomb</span>
                        <span class="origin-character-home">Marvel Comics</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ps-2">
                <div class="container-character-home p-3">
                    <img src="https://www.superherodb.com/pictures2/portraits/10/100/10060.jpg">
                    <div class="data-character">
                        <span class="name-character-home">A-Bomb</span>
                        <span class="origin-character-home">Marvel Comics</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ps-2">
                <div class="container-character-home p-3">
                    <img src="https://www.superherodb.com/pictures2/portraits/10/100/10060.jpg">
                    <div class="data-character">
                        <span class="name-character-home">A-Bomb</span>
                        <span class="origin-character-home">Marvel Comics</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ps-2">
                <div class="container-character-home p-3">
                    <img src="https://www.superherodb.com/pictures2/portraits/10/100/10060.jpg">
                    <div class="data-character">
                        <span class="name-character-home">A-Bomb</span>
                        <span class="origin-character-home">Marvel Comics</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-skills col-12 col-md-4 mb-2">
            <p class="text">Selecione uma habilidade</p>
            <div class="col-12 container-buttons-skills">
                <button type="button" class="buttons-skills button-intelligence">
                    <img src="imgs/btn-intelligence.png">
                    <span>Inteligência</span>
                </button>
                <button type="button" class="buttons-skills button-strength">
                    <img src="imgs/btn-strength.png">
                    <span>Força</span>
                </button>
                <button type="button" class="buttons-skills button-speed ">
                    <img src="imgs/btn-speed.png">
                    <span>Velocidade</span>
                </button>
                <button type="button" class="buttons-skills button-power">
                    <img src="imgs/btn-power.png">
                    <span>Poder</span>
                </button>
                <button type="button" class="buttons-skills button-durability">
                    <img src="imgs/btn-durability.png">
                    <span>Durabilidade</span>
                </button>
                <button type="button" class="buttons-skills button-combat">
                    <img src="imgs/btn-combat.png">
                    <span>Combate</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

    <script>
    function modalVs(){
        $("#modal-vs").modal("show");
    }
       
    </script>

    <script src="js/requestsToSuperHeroApi.js"></script>
</body>
</html>
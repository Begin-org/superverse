<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superverse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php include("topbar.php"); ?>

    <div class="container-history">
        <p class="text-your-history col-12">Este é seu histórico de partidas</p>
        <div class="loader loader-centered"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="utils/responseConstants.js"></script>
    <script src="js/requestsToSuperHeroApi.js"></script>
    <script src="js/requestsToSuperverseApi.js"></script>
    <script src="utils/skillTranslation.js"></script>

    <script>
    getBattlesByGoogleUidUser().then(async (response) => {
        let index = 0;

        //response.forEach(async function(battle, index) {
        //this is to show in descending date order
        for await(battle of response) {

            await getCharacterById(battle.idLoser).then(async (loser) => {

                await getCharacterById(battle.idWinner).then((winner) => {

                    index++;

                    console.log(index);

                    let cssClass = "victory";
                    let titleResultBattle = "Vitória";
                    let selectedCharacter = winner;
                    let opposingCharacter = loser;

                    if (battle.idChosen == battle.idLoser) {
                        titleResultBattle = "Derrota";
                        cssClass = "defeat";
                        opposingCharacter = winner;
                        selectedCharacter = loser;
                    }

                    if (battle.idLoser == 0) {
                        titleResultBattle = "Empate";
                    }

                    let content = `<a class="item-history item-history-${cssClass} col-12 col-sm-10" 
                        data-bs-toggle="collapse" href="#collapse-item-history${index}" role="button" 
                        aria-expanded="false" aria-controls="collapseExample">
                        <div class="own-character-history col-12 col-sm-5">
                            <img src="${selectedCharacter.characterImage}">
                            <p class="name-own-character-history">${selectedCharacter.characterName}</p>
                        </div>
                        <div class="col-12 col-sm-2 vs-superverse-history">
                            <img src="imgs/vs-superverse.png">
                        </div>
                        <div class="opposing-character-history col-12 col-sm-5">
                            <p class="name-opposing-character-history">${opposingCharacter.characterName}</p>
                            <img src="${opposingCharacter.characterImage}">
                        </div>
                        
                    </a>
                    <div class="collapse collapse-item-history collapse-item-history-${cssClass} col-12 col-sm-10" id="collapse-item-history${index}">
                        <p class="text-${cssClass}-history col-12">${titleResultBattle}</p>
                        <span class="text-data-match col-12">Partida realizada em ${battle.battleDate}, com a habilidade ${skillTranslation(battle.skill)}</span>
                    </div>`;

                    $(".container-history").append(content);

                }).catch(err => console.log(err));

            }).catch(err => console.log(err));

        }
        $(".loader").remove();

    }).catch(err => console.log(err));

    </script>
</body>

</html>
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
    <div class="modal" id="modal-vs" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-4">
                        <div class="chosen-character" id="chosen-character">
                            <img src="" class="image-chosen-character">
                            <p class="name-chosen"></p>
                            <p class="skill-chosen"></p>
                        </div>
                    </div>
                    <div class="col-4 center-col-modal">
                        <img src="imgs/vs-superverse.png" class="vs-superverse">
                    </div>
                    <div class="col-4">
                        <div class="opposing-character" id="opposing-character">
                            <img src="" class="image-opposing-character">
                            <p class="name-opposing"></p>
                            <p class="skill-opposing"></p>
                        </div>
                    </div>
                    <div class="col-12" id="lost-won-phrase">
                        <p class="phrase-won-lost">

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
            <button type="button" class="button-sort ms-2" onclick="modalVs('random')">
                <img src="imgs/btn-sort.png">
                <span class="span-sort">SORTEAR</span>
            </button>
        </p>
        <div class="container-characteres-home col-12 col-md-8">

            <div class="loader"></div>

        </div>
        <div class="container-skills col-12 col-md-4 mb-2">
            <p class="text">Selecione uma habilidade</p>
            <div class="col-12 container-buttons-skills">
                <button type="button" class="buttons-skills button-intelligence" onclick="modalVs('Intelligence')">
                    <img src="imgs/btn-intelligence.png">
                    <span>Inteligência</span>
                </button>
                <button type="button" class="buttons-skills button-strength" onclick="modalVs('Strength')">
                    <img src="imgs/btn-strength.png">
                    <span>Força</span>
                </button>
                <button type="button" class="buttons-skills button-speed" onclick="modalVs('Speed')">
                    <img src="imgs/btn-speed.png">
                    <span>Velocidade</span>
                </button>
                <button type="button" class="buttons-skills button-power" onclick="modalVs('Power')">
                    <img src="imgs/btn-power.png">
                    <span>Poder</span>
                </button>
                <button type="button" class="buttons-skills button-durability" onclick="modalVs('Durability')">
                    <img src="imgs/btn-durability.png">
                    <span>Durabilidade</span>
                </button>
                <button type="button" class="buttons-skills button-combat" onclick="modalVs('Combat')">
                    <img src="imgs/btn-combat.png">
                    <span>Combate</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/requestsToSuperHeroApi.js"></script>

    <script>
    let selectedHero = null;

    async function modalVs(skill) {
        if (skill == "random") {
            skill = ["Intelligence", "Strength", "Speed", "Power", "Durability", "Combat"][Math.floor(Math
            .random() *
                6)];

            await getRandomCharacter().then((userHero) => {
                selectedHero = userHero;
            }).catch(err => console.log(err));
        }

        await getRandomCharacter().then((opposing) => {

            let skillTranslation = "";

            if(skill == "Intelligence"){skillTranslation="Inteligência";}
            if(skill == "Strength"){skillTranslation="Força";}
            if(skill == "Speed"){skillTranslation="Velocidade";}
            if(skill == "Power"){skillTranslation="Poder";}
            if(skill == "Durability"){skillTranslation="Durabilidade";}
            if(skill == "Combat"){skillTranslation="Combate";}

            $(".image-chosen-character").attr("src", selectedHero.characterImage);
            $(".name-chosen").html(selectedHero.characterName);
            $(".skill-chosen").html(`${skillTranslation}: ${selectedHero[`character${skill}`]}`);

            $(".image-opposing-character").attr("src", opposing.characterImage);
            $(".name-opposing").html(opposing.characterName);
            $(".skill-opposing").html(`${skillTranslation}: ${opposing[`character${skill}`]}`);


            if (Number(opposing[`character${skill}`]) > Number(selectedHero[`character${skill}`])) {
                $(".phrase-won-lost").html("Você perdeu!");
                $(".phrase-won-lost").removeClass("won");
                $(".phrase-won-lost").addClass("lost");
            } else if (Number(selectedHero[`character${skill}`]) > Number(opposing[`character${skill}`])) {
                $(".phrase-won-lost").html("Você ganhou!");
                $(".phrase-won-lost").removeClass("lost");
                $(".phrase-won-lost").addClass("won");
            } else {
                $(".phrase-won-lost").html("Empate!");
                $(".phrase-won-lost").removeClass("lost");
                $(".phrase-won-lost").addClass("won");
            }

        }).catch(err => console.log(err));

        $("#modal-vs").modal("show");


    }

    function toggleSelected(element) {
        $("div").removeClass("container-character-home-selected");
        $(element).addClass("container-character-home-selected");

        getCharacterById(element.id).then((data) => {
            selectedHero = data;
        }).catch(err => console.log(err));

    }

    getListOfCharacters(700).then((data) => {
        let content = '';

        data.forEach(function(hero) {

            content += `<div class="col-12 col-md-6 col-lg-4 ps-2"> 
                <div class="container-character-home p-3" id="${hero.characterId}" onclick="toggleSelected(this)">
                    <img src="${hero.characterImage}">
                    <div class="data-character">
                        <span class="name-character-home">${hero.characterName}</span>
                        <span class="origin-character-home">${hero.publisher}</span>
                    </div>
                </div>
            </div>`;
        });

        $(".container-characteres-home").html(content);
        $(".loader").remove();


    }).catch(err => console.log(err));
    </script>


</body>

</html>
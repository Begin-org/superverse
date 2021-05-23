<?php
session_start();
require_once "../dao/BattleDAO.php";
require_once "../utils/responseConstants.php";

$battleDAO = new BattleDAO();

$responseArray = [];

switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":

        $responseArray["result"] = $battleDAO->getBattlesByGoogleUidUser($_SESSION['superverse_uid_google']);

        ($responseArray["result"] != false) ? $responseArray["responseStatus"] = SUCCESSUFUL : 
        $responseArray["responseStatus"] = ERROR;

        if($responseArray["result"]){
            $responseArray["result"] = Battle::convertArrayOfBattlesToAssociativeArray($responseArray["result"]);
        }

        break;

    case "POST":
        if(isset($_SESSION['superverse_uid_google'])){
            $responseArray["result"] = $battleDAO->createBattle(array(
                "idWinner" => intval($_POST["idWinner"]),
                "idLoser" => intval($_POST["idLoser"]),
                "idChosen" => intval($_POST["idChosen"]),
                "skill" => $_POST["skill"],
                "googleUidUser" => $_SESSION['superverse_uid_google']
            ));

            ($responseArray["result"] != false) ? $responseArray["responseStatus"] = SUCCESSUFUL : 
            $responseArray["responseStatus"] = ERROR;

        }else{
            $responseArray["result"] = "Usuário não está logado";
            $responseArray["responseStatus"] = SUCCESSUFUL;
        }

        break;

    default:
        $responseArray["result"] = "Este método de requisição não foi implementado";
        $responseArray["responseStatus"] = ERROR;
}

header("Content-Type: application/json");
echo json_encode($responseArray);

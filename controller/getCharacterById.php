
<?php

require_once "../dao/CharactersDAO.php";
require_once "../model/Character.php";

DEFINE("NO_RESULTS_FOR_THIS_SEARCH", 0);
DEFINE("SUCCESSUFUL_SEARCH", 1);
DEFINE("INVALID_ID_IN_SEARCH", 2);


if (isset($_GET['characterId']) && !empty($_GET['characterId'])) {

    $characterDao = new CharacterDAO();
    $response = $characterDao->getCharacterById($_GET['characterId']);

    if ($response != false) {
        
        $responseArray = []; 
        $responseArray["result"] = Character::convertCharacterToAssociativeArray($response);
        $responseArray["responseStatus"] = SUCCESSUFUL_SEARCH;

        echo json_encode($responseArray);

    } else {

        $responseArray = ["responseStatus" => NO_RESULTS_FOR_THIS_SEARCH];
        echo json_encode($responseArray);
      
    }
} else {

    $responseArray = ["responseStatus" => INVALID_ID_IN_SEARCH];
    echo json_encode($responseArray);

}

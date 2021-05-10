
<?php

require_once "../dao/CharactersDAO.php";
require_once "../model/Character.php";
require_once "../utils/responseConstants.php";


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

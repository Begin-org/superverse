
<?php

require_once "../dao/CharactersDAO.php";
require_once "../model/Character.php";
require_once "../utils/responseConstants.php";


if (isset($_GET['characterName']) && !empty($_GET['characterName'])) {

    $characterDao = new CharacterDAO();
    $response = $characterDao->getCharactersByName($_GET['characterName']);

    if ($response != false) {
        
        $responseArray = []; 
        $responseArray["result"] = Character::convertArrayOfCharactersToAssociativeArray($response);
        $responseArray["responseStatus"] = SUCCESSUFUL_SEARCH;

        echo json_encode($responseArray);

    } else {

        $responseArray = ["responseStatus" => NO_RESULTS_FOR_THIS_SEARCH];
        echo json_encode($responseArray);
      
    }
} else {

    $responseArray = ["responseStatus" => INVALID_NAME_IN_SEARCH];
    echo json_encode($responseArray);

}

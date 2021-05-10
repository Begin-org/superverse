
<?php

require_once "../dao/CharactersDAO.php";
require_once "../model/Character.php";

DEFINE("NO_RESULTS_FOR_THIS_SEARCH", 0);
DEFINE("SUCCESSUFUL_SEARCH", 1);
DEFINE("INVALID_NAME_IN_SEARCH", 2);


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

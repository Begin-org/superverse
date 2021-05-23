
<?php

require_once "../dao/CharactersDAO.php";
require_once "../model/Character.php";
require_once "../utils/responseConstants.php";


if (isset($_GET['listLimit']) && !empty($_GET['listLimit']) ) {

    $characterDao = new CharacterDAO();
    $response = $characterDao->getListCharacters($_GET['listLimit']);

    if ($response != false) {
        
        $responseArray = []; 
        $responseArray["result"] = Character::convertArrayOfCharactersToAssociativeArray($response);
        $responseArray["responseStatus"] = SUCCESSUFUL;

        echo json_encode($responseArray);

    } else {

        $responseArray = ["responseStatus" => NO_RESULTS_FOR_THIS_SEARCH];
        echo json_encode($responseArray);
      
    }
} else {

    $responseArray = ["responseStatus" => INVALID_PARAMETERS_IN_SEARCH];
    echo json_encode($responseArray);

}

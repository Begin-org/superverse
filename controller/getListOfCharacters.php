
<?php

require_once "../dao/CharactersDAO.php";
require_once "../model/Character.php";

DEFINE("NO_RESULTS_FOR_THIS_SEARCH", 0);
DEFINE("SUCCESSUFUL_SEARCH", 1);
DEFINE("INVALID_PARAMETERS_IN_SEARCH", 2);


if (isset($_GET['listBegin']) && !empty($_GET['listBegin']) &&
    isset($_GET['listLimit']) && !empty($_GET['listBegin']) ) {

    $characterDao = new CharacterDAO();
    $response = $characterDao->getListCharacters($_GET['listBegin'], $_GET['listLimit']);

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

    $responseArray = ["responseStatus" => INVALID_PARAMETERS_IN_SEARCH];
    echo json_encode($responseArray);

}

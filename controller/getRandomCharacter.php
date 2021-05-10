<?php

require_once "../dao/CharactersDAO.php";
require_once "../model/Character.php";

DEFINE("ERROR_IN_SEARCH", 0);
DEFINE("SUCCESSUFUL_SEARCH", 1);

$characterDao = new CharacterDAO();
$response = $characterDao->getRandomCharacter();

if ($response != false) {

    $responseArray = [];
    $responseArray["result"] = Character::convertCharacterToAssociativeArray($response);
    $responseArray["responseStatus"] = SUCCESSUFUL_SEARCH;

    echo json_encode($responseArray);
} else {

    $responseArray = ["responseStatus" => ERROR_IN_SEARCH];
    echo json_encode($responseArray);
}

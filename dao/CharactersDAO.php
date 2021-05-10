<?php

require_once "CurlDAO.php";
require_once "../model/Character.php";

class CharacterDAO
{

    public function getCharactersByName($nameOfTheCharacter)
    {
        $url = $this->getUrlApi() . "search/" . $nameOfTheCharacter;
        $curl = CurlDAO::getCurl($url);

        $response = json_decode(curl_exec($curl));

        if ($response != false && $response->response == "success") {

            $arrayOfCharacters = [];

            foreach ($response->results as $result) {

                $character = new Character();

                $character->setCharacterId($result->id);
                $character->setCharacterName($result->name);
                $character->setCharacterIntelligence($result->powerstats->intelligence);
                $character->setCharacterStrength($result->powerstats->strength);
                $character->setCharacterSpeed($result->powerstats->speed);
                $character->setCharacterDurability($result->powerstats->durability);
                $character->setCharacterPower($result->powerstats->power);
                $character->setCharacterCombat($result->powerstats->combat);
                $character->setCharacterImage($result->image->url);

                $arrayOfCharacters[] = $character;
            }

            return $arrayOfCharacters;
        } else {

            return false;
        }
    }

    public function getCharacterById($characterId)
    {
        $url = $this->getUrlApi() . $characterId;
        $curl = CurlDAO::getCurl($url);

        $response = json_decode(curl_exec($curl));

        if ($response != false && $response->response == "success") {

            $character = new Character();

            $character->setCharacterId($response->id);
            $character->setCharacterName($response->name);
            $character->setCharacterIntelligence($response->powerstats->intelligence);
            $character->setCharacterStrength($response->powerstats->strength);
            $character->setCharacterSpeed($response->powerstats->speed);
            $character->setCharacterDurability($response->powerstats->durability);
            $character->setCharacterPower($response->powerstats->power);
            $character->setCharacterCombat($response->powerstats->combat);
            $character->setCharacterImage($response->image->url);

            return $character;
        } else {
            return false;
        }
    }

    public function getRandomCharacter()
    {

        $minId = 1;
        $maxId = 732;

        $selectedId = rand($minId, $maxId);

        return $this->getCharacterById($selectedId);
    }

    public function getListCharacters($begin, $limit)
    {

        $listCharacters = [];

        for ($i = $begin; $i <= $begin + $limit; $i++) {
            
            $result = $this->getCharacterById($i);
            
            if ( $result != false) {
                
                $listCharacters[] = $result;

            } else {
                break;
            }
        }

        if (count($listCharacters) > 0) {
            
            return $listCharacters;

        } else {
            return false;
        }
    }

    private function getUrlApi()
    {
        $keyApi = "793724761267424";
        $urlApi = "https://www.superheroapi.com/api.php/$keyApi/";

        return $urlApi;
    }
}

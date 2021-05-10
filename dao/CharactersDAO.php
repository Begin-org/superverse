<?php

require_once "CurlDAO.php";
require_once "../model/Character.php";

class CharacterDAO
{

    public function read($response)
    {
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
        $character->setPublisher($response->biography->publisher);

        return $character;
    }

    public function getCharactersByName($nameOfTheCharacter)
    {
        $url = $this->getUrlApi() . "search/" . $nameOfTheCharacter;
        $curl = CurlDAO::getCurl($url);

        $response = json_decode(curl_exec($curl));

        if ($response != false && $response->response == "success") {

            $arrayOfCharacters = [];

            foreach ($response->results as $result) {

                $arrayOfCharacters[] = $this->read($result);
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

            return $this->read($response);
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

    public function getListCharacters($limit)
    {
        /*$favorite_heroes = [
            30, 38, 60, 63, 69, 76, 97, 106, 112, 149, 194, 201, 204, 213, 216, 226,
            233, 263, 278, 280, 298, 306, 309, 332, 346, 356, 367, 368, 370, 405, 423, 432, 441, 443, 491, 514, 528,
            536, 538, 542, 546, 561, 569, 576, 579, 620, 632, 637, 643, 644, 654, 655, 659, 675, 678,
            687, 717, 719, 730
        ];*/

        $url = $this->getUrlApi() . "search/a";
        $curl = CurlDAO::getCurl($url);

        $response = json_decode(curl_exec($curl));


        $listCharacters = [];

        if ($response != false && $response->response == "success") {

            shuffle($response->results);

            foreach ($response->results as $result) {
                /*if (in_array($result->id, $favorite_heroes)) {
                    array_push($listCharacters, $this->read($result));
                }*/

                array_push($listCharacters, $this->read($result));

                if (count($listCharacters) == $limit) {
                    break;
                }
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

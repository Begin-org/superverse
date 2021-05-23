<?php

require_once "CurlDAO.php";
require_once "../model/Battle.php";

class BattleDAO
{

    public function read($response)
    {
        $battle = new Battle();

        $battle->setIdBattle($response->idBattle);
        $battle->setIdWinner($response->idWinner);
        $battle->setIdLoser($response->idLoser);
        $battle->setIdChosen($response->idChosen);
        $battle->setSkill($response->skill);
        $battle->setGoogleUidUser($response->googleUidUser);
        $battle->setBattleDate($response->battleDate);

        return $battle;
    }

    public function getBattlesByGoogleUidUser($googleUidUser)
    {
        $url = $this->getUrlApi() . "/" . $googleUidUser;
        $curl = CurlDAO::getCurl($url);

        $response = json_decode(curl_exec($curl));

        if ($response != false && $response != null) {

            $arrayOfBattles = [];

            if(!is_array($response->battle)){$response->battle=array($response->battle);}

            foreach ($response->battle as $result) {

                array_push($arrayOfBattles, $this->read($result));
            }

            return $arrayOfBattles;
        } else {

            return false;
        }
    }

    public function createBattle($battle){
        $url = $this->getUrlApi();
        $curl = CurlDAO::getCurl($url);

        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($battle)); 
        curl_setopt( $curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        json_decode(curl_exec($curl));

        return !curl_errno($curl);

    }


    private function getUrlApi()
    {
        $urlApi = "http://localhost:8080/superverse_api/battles";

        return $urlApi;
    }
}

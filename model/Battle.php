<?php

class Battle
{
    private $idBattle;
    private $idWinner;
    private $idLoser;
    private $idChosen;
    private $skill;
    private $googleUidUser;
    private $battleDate;


    public function getIdBattle()
    {
        return $this->idBattle;
    }


    public function setIdBattle($idBattle)
    {
        $this->idBattle = $idBattle;

        return $this;
    }


    public function getIdWinner()
    {
        return $this->idWinner;
    }


    public function setIdWinner($idWinner)
    {
        $this->idWinner = $idWinner;

        return $this;
    }


    public function getIdLoser()
    {
        return $this->idLoser;
    }


    public function setIdLoser($idLoser)
    {
        $this->idLoser = $idLoser;

        return $this;
    }


    public function getIdChosen()
    {
        return $this->idChosen;
    }


    public function setIdChosen($idChosen)
    {
        $this->idChosen = $idChosen;

        return $this;
    }


    public function getSkill()
    {
        return $this->skill;
    }


    public function setSkill($skill)
    {
        $this->skill = $skill;

        return $this;
    }


    public function getGoogleUidUser()
    {
        return $this->googleUidUser;
    }


    public function setGoogleUidUser($googleUidUser)
    {
        $this->googleUidUser = $googleUidUser;

        return $this;
    }


    public function getBattleDate()
    {
        return $this->battleDate;
    }


    public function setBattleDate($battleDate)
    {
        $this->battleDate = $battleDate;

        return $this;
    }

    public static function convertArrayOfBattlesToAssociativeArray($arrayOfBattles)
    {

        $associativeArray = [];

        foreach ($arrayOfBattles as $battle) {

            $battleAttributes = [];

            $battleAttributes["idBattle"] = $battle->getIdBattle();
            $battleAttributes["idWinner"] = $battle->getIdWinner();
            $battleAttributes["idLoser"] = $battle->getIdLoser();
            $battleAttributes["idChosen"] = $battle->getIdChosen();
            $battleAttributes["skill"] = $battle->getSkill();
            $battleAttributes["googleUidUser"] = $battle->getGoogleUidUser();
            $battleAttributes["battleDate"] = $battle->getBattleDate();

            $associativeArray[] = $battleAttributes;
        }

        return $associativeArray;
    }

    public static function convertBattleToAssociativeArray($battle)
    {

        $battleAttributes = [];

        $battleAttributes["idBattle"] = $battle->getIdBattle();
        $battleAttributes["idWinner"] = $battle->getIdWinner();
        $battleAttributes["idLoser"] = $battle->getIdLoser();
        $battleAttributes["idChosen"] = $battle->getIdChosen();
        $battleAttributes["skill"] = $battle->getSkill();
        $battleAttributes["googleUidUser"] = $battle->getGoogleUidUser();
        $battleAttributes["battleDate"] = $battle->getBattleDate();

        return $battleAttributes;
    }
}

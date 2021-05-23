<?php

class Character
{

    private $characterId;
    private $characterName;
    private $characterImage;
    private $characterIntelligence;
    private $characterStrength;
    private $characterSpeed;
    private $characterDurability;
    private $characterPower;
    private $characterCombat;
    private $publisher;


    public function getCharacterId()
    {
        return $this->characterId;
    }

    public function setCharacterId($characterId)
    {
        $this->characterId = $characterId;

        return $this;
    }


    public function getCharacterName()
    {
        return $this->characterName;
    }

    public function setCharacterName($characterName)
    {
        $this->characterName = $characterName;

        return $this;
    }

    public function getCharacterImage()
    {
        return $this->characterImage;
    }

    public function setCharacterImage($characterImage)
    {
        $this->characterImage = $characterImage;

        return $this;
    }

    public function getCharacterIntelligence()
    {
        return $this->characterIntelligence;
    }


    public function setCharacterIntelligence($characterIntelligence)
    {
        $this->characterIntelligence = $characterIntelligence;

        return $this;
    }

    public function getCharacterStrength()
    {
        return $this->characterStrength;
    }

    public function setCharacterStrength($characterStrength)
    {
        $this->characterStrength = $characterStrength;

        return $this;
    }

    public function getCharacterSpeed()
    {
        return $this->characterSpeed;
    }


    public function setCharacterSpeed($characterSpeed)
    {
        $this->characterSpeed = $characterSpeed;

        return $this;
    }

    public function getCharacterDurability()
    {
        return $this->characterDurability;
    }

    public function setCharacterDurability($characterDurability)
    {
        $this->characterDurability = $characterDurability;

        return $this;
    }


    public function getCharacterPower()
    {
        return $this->characterPower;
    }


    public function setCharacterPower($characterPower)
    {
        $this->characterPower = $characterPower;

        return $this;
    }

    public function getCharacterCombat()
    {
        return $this->characterCombat;
    }

    public function setCharacterCombat($characterCombat)
    {
        $this->characterCombat = $characterCombat;

        return $this;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    public static function convertArrayOfCharactersToAssociativeArray($arrayOfCharacters)
    {

        $associativeArray = [];

        foreach ($arrayOfCharacters as $character) {

            $characterAttributes = [];

            $characterAttributes["characterId"] = $character->getCharacterId();
            $characterAttributes["characterName"] = $character->getCharacterName();
            $characterAttributes["characterImage"] = $character->getCharacterImage();
            $characterAttributes["publisher"] = $character->getPublisher();
            $characterAttributes["characterIntelligence"] = ($character->getCharacterIntelligence() != "null") ? $character->getCharacterIntelligence() : 0;
            $characterAttributes["characterStrength"] = ($character->getCharacterStrength() != "null") ? $character->getCharacterStrength() : 0;
            $characterAttributes["characterSpeed"] = ($character->getCharacterSpeed() != "null") ? $character->getCharacterSpeed() : 0;
            $characterAttributes["characterDurability"] = ($character->getCharacterDurability() != "null") ? $character->getCharacterDurability() : 0;
            $characterAttributes["characterPower"] = ($character->getCharacterPower() != "null") ? $character->getCharacterPower() : 0;
            $characterAttributes["characterCombat"] = ($character->getCharacterCombat() != "null") ? $character->getCharacterCombat() : 0;

            $associativeArray[] = $characterAttributes;
        }

        return $associativeArray;
    }
    public static function convertCharacterToAssociativeArray($character)
    {


        $characterAttributes = [];

        $characterAttributes["characterId"] = $character->getCharacterId();
        $characterAttributes["characterName"] = $character->getCharacterName();
        $characterAttributes["characterImage"] = $character->getCharacterImage();
        $characterAttributes["publisher"] = $character->getPublisher();
        $characterAttributes["characterIntelligence"] = ($character->getCharacterIntelligence() != "null") ? $character->getCharacterIntelligence() : 0;
        $characterAttributes["characterStrength"] = ($character->getCharacterStrength() != "null") ? $character->getCharacterStrength() : 0;
        $characterAttributes["characterSpeed"] = ($character->getCharacterSpeed() != "null") ? $character->getCharacterSpeed() : 0;
        $characterAttributes["characterDurability"] = ($character->getCharacterDurability() != "null") ? $character->getCharacterDurability() : 0;
        $characterAttributes["characterPower"] = ($character->getCharacterPower() != "null") ? $character->getCharacterPower() : 0;
        $characterAttributes["characterCombat"] = ($character->getCharacterCombat() != "null") ? $character->getCharacterCombat() : 0;

        return $characterAttributes;
    }
}

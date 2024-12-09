<?php

class Pet {
    private $ID;
    private $Name;
    private $Breed;
    private $Gender;
    private $isDangerous;


    public function __construct($ID, $Name, $Breed, $Gender, $isDangerous) {
        $this->ID = rand(0, 9999);
        $this->Name = $Name ;
        $this->Breed = $Breed;
        $this->Gender = $Gender;
        $this->isDangerous = $this->Breed == "Pitfall" || $this->Breed == "Mastiff"; 
    }

    // Add getters and setters for each attribute
    public function getID() {
        return $this->ID;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function getName() {
        return $this->Name;
    }

    public function setName($Name) {
        $this->Name = $Name;
    }

    public function getBreed() {
        return $this->Breed;
    }

    public function setBreed($Breed) {
        $this->Breed = $Breed;
    }

    public function getGender() {
        return $this->Gender;
    }

    public function setGender($Gender) {
        $this->Gender = $Gender;
    }

    public function getDangerous() {
        return $this->isDangerous;
    }

    public function setDangerous($isDangerous) {
        $this->isDangerous = $isDangerous;
    }

}
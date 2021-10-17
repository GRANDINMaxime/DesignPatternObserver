<?php

class Casting implements Observer{
    
    public string $nameCasting;

    public function setCastingName(string $nameCasting) 
    {
        $this->nameCasting = $nameCasting;
    }

    public function alert()
    {
        echo $this->nameCasting . " vient d'être crée ";
    }
}
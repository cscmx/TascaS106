<?php

require_once 'class/athlete.php';

class PoleVaulter extends Athlete 
{

    public function competition(): string 
    {
        return "Jump High Bar";
    }

    public function compete(): string 
    {
        return "Competitor ".$this->name. " jumped".PHP_EOL;
    }

    public function __toString(): string 
    {
        return "Athlete: ".$this->name. " has ".$this->nationality." citizenship".PHP_EOL;
    }

    public function __serialize(): array
    {
        return [
            'name' => $this->name,
            'nationality' => $this->nationality
        ];
    }
} 

?>
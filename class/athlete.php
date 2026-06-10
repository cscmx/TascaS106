<?php

abstract class Athlete {

    protected string $name;
    protected string $nationality;

    public function __construct(string $name, string $nationality) {
        $this->name = $name;
        $this->nationality = $nationality;
    }

    public function getName(): string {
        return $this->name;
    }
    public function getNationality (): string {
        return $this->nationality;
    }

    public function setName (string $name): void {
        $this->name = $name;
    } 
    public function setNationality (string $nationality): void {
        $this->nationality = $nationality;
    }


    //métodos propios 
    abstract public function competition(): string;

    abstract public function compete(): string;

}

?>
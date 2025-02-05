<?php
class Ville {

    // Properties
    private $nom;
    private $departement;
    private $population;
    
    // Constructor
    public function __construct(array $datas) {
        $this->hydrate($datas);
    }

    public function hydrate(array $datas) {
        foreach ($datas as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


    // Methods "Getters"
    public function getNom() {
        return $this->nom;
    }
    public function getDepartement() {
        return $this->departement;
    }
    public function getPopulation() {
        return $this->population;
    }
    

    // Methods "Setters"
    public function setNom(string $nom) {
        $this->nom = $nom;
    }
    public function setDepartement(string $departement) {
        $this->departement = $departement;
    }
    public function setPopulation(int $population) {
        $this->population = $population;
    }
    
}
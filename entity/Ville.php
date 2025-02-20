<?php
class Ville {

    // Properties
    private $nom;
    private $departement;
    private $population;
    private $cp;
    private $surface;
    
    
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
    public function getCp() {
        return $this->cp;
    }
    public function getSurface() {
        return $this->surface;
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
    public function setCp(string $cp) {
        $this->cp = $cp;
    }
    public function setSurface(string $surface) {
        $this->surface = $surface;
    }
    
}
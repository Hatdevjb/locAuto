<?php 


// classes/Vehicule.class.php
abstract class Vehicule {
    // Propriétés

    private string $marque;
    private string $modele;
    private string $id;

    // Constructeur

    /**
     * Construit l'objet Vehicule
     *
     * @param string $marque
     * @param string $modele
     * @param string $id 
     */
    public function __construct(string $marque, string $modele, string $id) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->id =  $id;
    }

    // Accesseurs (setter,getters)

    // Méthodes abstraites

    /**
     *
     * 
     */
    abstract public function planifierRevision(): bool;


    /**
     * Retourne une représentation textuelle du véhicule
     */
    public function __toString(): string {
        return get_class($this) . " " . $this->marque . " " . $this->modele . " " . $this->id;
    }

}

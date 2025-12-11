<?php 

// classes/Vehicule.class.php
abstract class Vehicule {
    // Propriétés

    private string $marque;
    protected string $modele;
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
     * Booléin qui retouren un message si le vehicule est planifeir pour révision
     * 
     */
    public abstract  function planifierRevision();


    /**
     * Retourne une représentation textuelle du véhicule
     */
    public function __toString(): string {
        return get_class($this) . " <br> Ce vehicule est : \n<br> De la marque : " . $this->marque . " \n<br>  De model : " . $this->modele . " \n<br>  Identifié par la plaque : " . $this->id;
    }

}


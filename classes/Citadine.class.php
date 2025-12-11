<?php


class Citadine extends Vehicule {

    private int $autonomie;

    // Constructeur autonomie + construc hériter de Vehicule
    public function __construct(string $marque, string $modele, string $id, int $autonomie) { 
        parent::__construct($marque, $modele, $id);
        $this->autonomie = $autonomie;
    }


    /**
     * Retourne l'autonomie de la citadine 
     * 
     */
    public function __toString(): string {
        return parent::__toString() . "<br>\n Possède une autonomie de : " . $this->autonomie . " km";
    }


    /**
     *  Retourne msg si révision planifier
     * 
     */
    public function planifierRevision(): void {
        echo "Révision prévue pour la citadine " . $this->modele;
    }

}
<?php


class Familiale extends Vehicule {

    private int $nbrDePassagerMAX;

    // Constructeur autonomie + construc hériter de Vehicule
    public function __construct(string $marque, string $modele, string $id, int $nbrDePassagerMAX) { 

        parent::__construct($marque, $modele, $id);

        $this->nbrDePassagerMAX = $nbrDePassagerMAX;
    }


    /**
     * Retourne l'autonomie de la familiale 
     * 
     */
    public function __toString(): string {
        return parent::__toString() . "\n nombre de passager: " . $this->nbrDePassagerMAX . " km";
    }


    /**
     * Retourne msg si révision planifier
     * 
     */
    public function planifierRevision(): void {
        echo "Révision prévue pour la familiale " . $this->modele;
    }

}
<?php


class Utilitaire extends Vehicule {

    private int $chargeUtile;

    // Constructeur autonomie + construc hériter de Vehicule
    public function __construct(string $marque, string $modele, string $id, int $chargeUtile) { 

        parent::__construct($marque, $modele, $id);

        $this->chargeUtile = $chargeUtile;
    }


    /**
     * Retourne l'autonomie de la familiale 
     * 
     */
    public function __toString(): string {
        return parent::__toString() . "\n nombre de passager: " . $this->chargeUtile . " km";
    }


    /**
     * Retourne msg si révision planifier
     * 
     */
    public function planifierRevision(): void {
        echo "Révision prévue pour la familiale " . $this->modele;
    }

}
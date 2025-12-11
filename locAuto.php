<?php

//test (pour Vehiule)
    spl_autoload_register(function($classe){
        include "classes/" . $classe . ".class.php";
    });

    const RC = "<br>\n";

    $c1 = new Citadine('Nissane', "Micra25","AG-936-SR",10000) ; 
    echo $c1 . RC;

    $f1 = new Familiale("Citroen", "C4 PICASSO", "SM-189-FP", 5);
    echo $f1 . RC;
     
    $u1 = new Utilitaire("Peugot", "E EXPERT XL","EX-123-PL",1235) ;
    echo $u1 . RC;
   


?>
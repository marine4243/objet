<?php

require_once("Seau.php");

// declaration d'une instance
$monSeau = new seau("zinc", "grise", "fhhf");
/*$monSeau->contenance = 10;
$monSeau->matiere = "zinc";
$monSeau->couleur = "gris";*/

$monSeau->decrire();

// execution d'une methode
$monSeau->remplir();

$monSeau->vider();

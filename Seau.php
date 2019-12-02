<?php

class Seau
{
  // les proprietes
  private $matiere;
  private $couleur;
  private $contenance;

  // le constructeur __construct mettre double enderscore
  public function __construct($sMatiere, $sCouleur, $iContenance){
    echo "Execution de constructeur\n";
    $bErreur = false;

    if (is_string($sMatiere)) {
      $this->matiere = $sMatiere;
    } else {
      $bErreur = true;
    }

    if (is_string($sCouleur)) {
      $this->couleur = $sCouleur;
    } else {
      $bErreur = true;
    }

    if (is_int($iContenance) &&
       $iContenance > 0 &&
       $iContenance <= 10
       ) {

       $this->contenance = $iContenance;

    } else {
      $bErreur = true;
    }

    if ($bErreur) {
      echo "il y a une erreur dans la creation de l'objet\n";
    }
  }

  // les methodes
  public function remplir(){
    echo "Execution de la methode remplir\n";
  }

  public function vider(){
    echo "Execution de la methode vider\n";
  }

  public function decrire(){
    echo "Le seau est en ".$this->matiere." de couleur ".$this->couleur." contenant ".$this->contenance." litres\n";
  }
}
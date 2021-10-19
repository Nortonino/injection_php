<?php
//mvc
require_once "../model/injectionsql.php";


//constructeur 
function __construct($id, $prenom, $nom, $email) {

     $this->id = $id;
     $this->prenom = $prenom;
     $this->nom = $nom;
     $this->email = $email;
}
//creation de la bdd 
//appel de methode getRequeteSql
$bdd = new bdd();

$Nomuser = $bdd-> getRequeteSql($nom);

?>
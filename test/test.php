<?php 

require_once "../Controller/Controllersql.php";

class ProductTest extends TestCase
{
    public function Nom_trouverUtilisateur_devraitRetournerclient()
    {

        $Nomuser = new Nom('abedaggue'); //(1) car recherche de un seul nom
        $this->assertSame(1,'Ligne de commande pour savoir si $Nomuser contitent le nom pluchart','il doit contenir le nom pluchart');
    }

    public function doublonDeNom_trouverNom_devraitRetournerLesDeuxClients(){

        $Nomuser = new Nom('jean'); //(2) car nom en double
        $this->assertSame(2,'Ligne de commande pour savoir si $Nomuser contitent deux fois le nom test','il doit contenir deux fois le nom test');
    }

    public function aucunNom_trouverParNom_devraitRetournerZeroClient()
    {
        $Nomuser = new Nom('paul');  //(2) car inconnue de la bdd 
        $this->assertSame(0,'Ligne de commande pour savoir si $Nomuser contient  le nom patrick','il ne doit avoir aucun utilisateur patrick');
    }

}
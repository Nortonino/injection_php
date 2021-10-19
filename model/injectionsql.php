<?php
    
    class user{
    
            // Constructeur pour la connexion à la bdd
            function __construct(){
            //connexion a la bdd avec le nom de la bdd son nom d'hote le compte ici root et le mot de passe
            try{
                $this->bdd = new PDO("mysql:dbname=injection;host:127.0.0.1","root","");
                echo 'connexion établie ';
            }
            catch(PDOException $e){
          
        echo $e->getmessage();
            }
                }
            
            //getter retourne bdd
         function getBdd(){
         return $this->bdd;
            }

  

    function getRequeteSql($id, $prenom, $nom, $email){
   
   
    $sql = "select ID_USER, Prenom, Nom, Email from utilisateur 
    where ID_USER = :ID_USER 
        AND where Prenom = :Prenom 
        AND Nom = :Nom
        AND Email = :Email";

    //préparation de la requete
    $req = $bdd->prepare($sql);
    //verifcation de la requete
    $result = $requete->execute(array(':ID_USER' => $id, 
                                  ':Prenom' => $prenom,
                                  ':Nom' => $nom,
                                  'Email' => $email));
             
    return $requete->fetch();
    }
}

    
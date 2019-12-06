<?php
require_once('connection.php');
session_start();



if(isset($_POST['login'])){


      $nom       = $_POST['nom'];
      $prenom    = $_POST['prenom'];
      $mail      = $_POST['mail'];
      $telephone = $_POST['telephone'];
      $profil    = $_POST['profil'];
      $contrat   = $_POST['contrat'];
      $embauche  = $_POST['embauche'];
      $nbrconges = $_POST['nbrconges'];
      $nbrcongespayes = $_POST['nbrcongespayes'];
        $query="INSERT INTO `salarie` (`id`, `Fonction`, `mail`, `nom`, `DateEmbauche`, `Prenom`, `Pass`, `telephone`, `Contrat`,  `NbrcongeRTT`, `NbrcongeRestant`) VALUES (NULL, '$profil', '$mail', '$nom', '$embauche', '$prenom', '', '$telephone', '$contrat', '$nbrconges','$nbrcongespayes')";

    
      $result = mysqli_query($con,$query);
        if (mysqli_fetch_assoc($result)) 
          {
            
            header("location:Accueil.html");
          }
        else
          {

            header("location:add.php?Invalid=pleas enter correct user name and password");
          }



}
?>
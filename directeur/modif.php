<?php
require_once('connection.php');
session_start();
if(!empty($_GET['id'])){
  $id =checkInput($_GET['id']);
}
function checkInput($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

  


  if(!empty($_POST)){
    

    $id = checkInput($_POST['id']);




      $nom       = $_POST['nom'];
      $prenom    = $_POST['prenom'];
      $mail      = $_POST['mail'];
      $telephone = $_POST['telephone'];
      $profil    = $_POST['profil'];
      $contrat   = $_POST['contrat'];
      $embauche  = $_POST['embauche'];
      $nbrconges = $_POST['nbrconges'];
      $nbrcongespayes = $_POST['nbrcongespayes'];
      


       if(!empty($_POST['nom']))
       {


       $statement=$con->query("UPDATE `salarie` SET `nom`='$nom' where id = ".$id);
        

       }
       

        if (!empty($_POST['prenom'])){

          $statement=$con->query("UPDATE `salarie` SET `Prenom`='$prenom'  where id =" .$id);
        }
               

        if (!empty($_POST['mail'])){

          $statement=$con->query("UPDATE `salarie` SET `mail`='$mail' where id = ".$id);
        }
                    

        if (!empty($_POST['telephone'])){

          $statement=$con->query("UPDATE `salarie` SET `telephone`='$telephone' where id = ".$id);
        }
           

        if (!empty($_POST['profil'])){

          $statement=$con->query("UPDATE `salarie` SET `Fonction`='$profil' where id = ".$id);
        }
           

        if (!empty($_POST['contrat'])){

          $statement=$con->query("UPDATE `salarie` SET `Contrat`='$contrat' where id = ".$id);
        }
           

        if (!empty($_POST['embauche'])){

          $statement=$con->query("UPDATE `salarie` SET `DateEmbauche`='$embauche' where id = ".$id);
        }
           

        if (!empty($_POST['nbrconges'])){

          $statement=$con->query("UPDATE `salarie` SET `NbrcongeRTT`='$nbrconges' where id = ".$id);
        }

        if (!empty($_POST['nbrcongespayes'])){

          $statement=$con->query("UPDATE `salarie` SET `NbrcongeRestant`='$nbrcongespayes' where id = ".$id);
        }

      header("location:gestionSalaries.php");
     
}
  
?>
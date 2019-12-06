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

	
	$id =checkInput($_GET['id']);
	$statement=$con->query("select * from salarie where id = ".$id);
		$followingdata = $statement->fetch_assoc();

	
		

	

		
	
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Gestion des congés</title>
	<link rel="icon" type="image/ico" href="logo.png" />
	
	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	
	<!-- Page level plugin CSS-->
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	
	<!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet">
	
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
	

	
	<a class="navbar-brand mr-1" href="index.html"><i class="fas fa-arrow-circle-left"></i> Retour en arrière</a>
	

	
	<!-- Navbar -->

</nav>



<center>


<div class="col-md-9">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<h4>Nouveau salarié</h4>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">

					<form action="modif.php" method="post">
						<div class="form-group row">

							<label for="nom" class="col-4 col-form-label">nom</label> 
							
							<div class="col-8">
								<?php echo '<input id="nom" name="nom" placeholder="'.$followingdata['nom'].'" class="form-control here"  type="text">'?>
							</div>
						</div>
						
						<div class="form-group row">
							<label for="prenom" class="col-4 col-form-label">Prénom</label>
							<div class="col-8">
								<?php echo '<input id="prenom" name="prenom" placeholder="'.$followingdata['Prenom'].'" class="form-control here"  type="text">'?>
							</div>
						</div>
						
						
						<div class="form-group row">
						 <?php  echo '<input type="email" id="inputEmail" class="form-control" name="mail" placeholder="'.$followingdata['mail'].'">'?>
							
						</div>
						
						<div class="form-group row">
							<label for="telephone" class="col-4 col-form-label">Numéro de téléphone</label>
							<div class="col-8">
								
								 <?php  echo '<input id="telephone" name="telephone" placeholder="'.$followingdata['telephone'].'" class="form-control here" type="text">'?>
							</div>
						</div>
						
						<div class="form-group row">
							<select name="profil" class="custom-select">
								<?php  echo '<option selected>Selectionez le profil:  '.$followingdata['Fonction'].'</option>'?>
								<option value="Enseignant">Enseignant</option>
								<option value="AAdministratif">Administratif</option>
							</select>
						</div>
						
						<div class="form-group row">
							<select name="contrat" class="custom-select">
								<?php  echo '<option selected>Selectionez le contrat:  '.$followingdata['Contrat'].'</option>'?>
							
								<option value="CDI">CDI</option>
								<option value="CDD">CDD</option>
							</select>
						</div>
						
						
						<div class="form-group row">
							<?php  echo '<label for="embauche" class="col-4 col-form-label"> Date Embauche:  '.$followingdata['DateEmbauche'].'</label>'?>
							<div class="col-8">
								<?php  echo '<input id="embauche" name="embauche" placeholder="embauche" class="form-control here"  type="date">'?>
							</div>
						</div>
						
						
						
						<div class="form-group row">
							<label for="nbrconges" class="col-4 col-form-label">Nombre de congés restant RTT</label>
							<div class="col-8">
								<?php  echo '<input id="nbrconges" name="nbrconges" placeholder="'.$followingdata['NbrcongeRTT'].'" class="form-control here"  type="text">'?>
							</div>
						</div>
						
						<div class="form-group row">
							<label for="nbrcongespayes" class="col-4 col-form-label">Nombre de congés restant payé</label>
							<div class="col-8">
								<?php  echo '<input id="nbrcongespayes" name="nbrcongespayes" placeholder="'.$followingdata['NbrcongeRestant'].'" class="form-control here" type="text">'?>
							</div>
						</div>
						
						

						<div class="form-group row">
							<div class="offset-4 col-8">
								<input type="hidden" name="id" value="<?php echo $id;?>"/> 
								<button class="btn btn-primary" type="submit" name="login"><a href="gestionSalaries.php"></a>Connexion</button>
								
							</div>
						</div>
					</form>
				</div>
			</div>
		
		</div>
	</div>
</div>
</div>
</div>






	<footer class="wrapper style1 align-center">
		<div class="inner">
			<ul class="icons">
				<i class="fas fa-phone-alt"></i><span class="label">  Téléphone: 01 56 20 62 00   </span>
				
				<i class="fas fa-map-marker-alt"></i><span class="label">  38 rue Molière, 94200 Ivry-sur-Seine</span>
			
			</ul>
		
		</div>
	</footer>
</center>

</body>
</html>
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
					<form action="enregistrer.php" method="post">
						<div class="form-group row">
							<label for="nom" class="col-4 col-form-label">Nom</label>
							<div class="col-8">
								<input id="nom" name="nom" placeholder="Nom" class="form-control here" required="required" type="text">
							</div>
						</div>
						
						<div class="form-group row">
							<label for="prenom" class="col-4 col-form-label">Prénom</label>
							<div class="col-8">
								<input id="prenom" name="prenom" placeholder="Prénom" class="form-control here"  required="required"type="text">
							</div>
						</div>
						
						
						<div class="form-group row">
							<input type="email" id="inputEmail" class="form-control" name="mail" placeholder="Email" required autofocus>
							
						</div>
						
						<div class="form-group row">
							<label for="telephone" class="col-4 col-form-label">Numéro de téléphone</label>
							<div class="col-8">
								
								<input id="telephone" name="telephone" placeholder="Téléphone" class="form-control here" type="text">
							</div>
						</div>
						
						<div class="form-group row">
							<select name="profil" class="custom-select">
								<option selected>Selectionez le profil:</option>
								<option value="Enseignant">Enseignant</option>
								<option value="AAdministratif">Administratif</option>
							</select>
						</div>
						
						<div class="form-group row">
							<select name="contrat" class="custom-select">
								<option selected>Selectionez le contrat:</option>
								<option value="CDI">CDI</option>
								<option value="CDD">CDD</option>
							</select>
						</div>
						
						
						<div class="form-group row">
							<label for="embauche" class="col-4 col-form-label">Date Embauche</label>
							<div class="col-8">
								<input id="embauche" name="embauche" placeholder="embauche" class="form-control here"  required="required"type="date">
							</div>
						</div>
						
						
						
						<div class="form-group row">
							<label for="nbrconges" class="col-4 col-form-label">Nombre de congés restant RTT</label>
							<div class="col-8">
								<input id="nbrconges" name="nbrconges" placeholder="Nombre de congés restant RTT" class="form-control here"  required="required"type="text">
							</div>
						</div>
						
						<div class="form-group row">
							<label for="nbrcongespayes" class="col-4 col-form-label">Nombre de congés restant payé</label>
							<div class="col-8">
								<input id="nbrcongespayes" name="nbrcongespayes" placeholder="Nombre de congés restant payé" class="form-control here"  required="required"type="text">
							</div>
						</div>
						
						

						<div class="form-group row">
							<div class="offset-4 col-8">
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





<!-- Footer -->

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
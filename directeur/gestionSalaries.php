<?php
			session_start();
			require_once('connection.php');
			
	$query = "select * from salarie";
	$result = $con->query($query);
	$followingdata = $result->fetch_assoc()


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

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
	
	<a class="navbar-brand mr-1" href="index.html">Directeur</a>
	
	<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
		<i class="fas fa-bars"></i>
	</button>
	
	<!-- Navbar -->

</nav>

<div id="wrapper">
	
	<!-- Sidebar -->
	<ul class="sidebar navbar-nav">
		<li class="nav-item active">
			<a class="nav-link" href="index.html">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Menu</span>
			</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-fw fa-folder"></i>
				<span>Gérer un salarié</span>
			</a>
			<div class="dropdown-menu" aria-labelledby="pagesDropdown">
				<a class="dropdown-item" href="add.php">Ajouter un salarié</a>
		
				<a class="dropdown-item" href="gestionSalaries.php">Afficher</a>
		
		
		
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-calendar-check"></i>
				<span>Congés</span>
			</a>
			<div class="dropdown-menu" aria-labelledby="pagesDropdown">
				<a class="dropdown-item" href="login.html">Accepter/Refuser</a>
				<a class="dropdown-item" href="login.html">Commenter</a>
		
		
		
		
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-comments"></i>
				<span>Afficher</span>
			</a>
			<div class="dropdown-menu" aria-labelledby="pagesDropdown">
				<a class="dropdown-item" href="login.html">Demandes</a>
				<a class="dropdown-item" href="login.html">Commentaires</a>
			
			
			
			</div>
	
	
	</ul>
	
	
	<!-- **********************************************************************************************************************************************************
	MAIN CONTENT
	*********************************************************************************************************************************************************** -->
	<!--main content start-->
	
	
	<section id="main-content">
		<section class="wrapper">
			<!-- row -->
			
			<div class="row mt">
				<div class="col-md-12">
					<div class="content-panel">
						<table class="table table-striped table-advance table-hover">
							<h4><i class="fas fa-folder-open"></i> Salariés</h4>
							<hr>
							<thead>
							<tr>
								<th><i class="fa fa-bookmark"></i> Adresse mail</th>
								<th><i class="fa fa-bookmark"></i> Nom</th>
								<th><i class="fa fa-bookmark"></i> Prénom</th>
								<th><i class="fa fa-question-circle"></i> Fonction</th>
								
								<th><i class=" fa fa-edit"></i> Modification et Supression</th>
								
								
								<th></th>
							</tr>
							</thead>
							<tbody method="post">
							<?php  	
							while ($donnees = $result->fetch_assoc()) {
							
							
								
							
									echo '<tr>';
										echo '<td>';
								 			echo $donnees['mail'];
										echo '</td>';
										echo '<td class="hidden-phone">';
								 			echo $donnees['nom'];
								 		echo '</td>';
										echo '<td>';
								 			echo $donnees['Prenom'];
								 		echo '</td>';
										echo '<td>';
								 			echo $donnees['Fonction'];
								 		echo '</td>';
										echo '<td>';
											echo '<a class="btn btn-success btn-xs" href="modification.php?id='.$donnees['id'].'"><i class="fa fa-pencil "></i>Modifier</a>';	
											echo '<a class="btn btn-danger btn-xs" href="delete.php?id='.$donnees['id'].'"><i class="fa fa-trash-o "></i>Supprimer</a>';
										echo '</td>';
									echo '</tr>';
							 
							}
							?>




							
							
							</tbody>
						</table>
					</div>
					<!-- /content-panel -->
				</div>
				<!-- /col-md-12 -->
			</div>
			<!-- /row -->
		</section>
	</section>
	<!-- /MAIN CONTENT -->
	<!--main content end-->
	
	
	
	
	
	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	
	<!-- Page level plugin JavaScript-->
	<script src="vendor/chart.js/Chart.min.js"></script>
	<script src="vendor/datatables/jquery.dataTables.js"></script>
	<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
	
	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin.min.js"></script>
	
	<!-- Demo scripts for this page-->
	<script src="js/demo/datatables-demo.js"></script>
	<script src="js/demo/chart-area-demo.js"></script>
	
	
	
	

</div>



<!-- Footer -->
<center>
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

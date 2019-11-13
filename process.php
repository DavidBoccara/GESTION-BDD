<?php
require_once('connection.php');
session_start();


	

	if(isset($_POST['login'])){
		if(empty($_POST['mail']) || empty($_POST['Password']))
		{
			header("location:authentification.php?Empty(remplissez le champs)");
		}
		else
		{
			
			if ($_POST['profil']=='S'){

			$query="select * from salarie where mail='".$_POST['mail']."' and Pass='".$_POST['Password']."'";
			$result = mysqli_query($con,$query);

				if (mysqli_fetch_assoc($result)) 
					{
						$_SESSION['User']=$_POST['mail'];
						header("location:wellcome.php");
					}
				else
					{

						header("location:authentification.php?Invalid=pleas enter correct user name and password");
					}
			}
			if ($_POST['profil']=='D'){

			$query="select * from directeur where mail='".$_POST['mail']."' and Pass='".$_POST['Password']."'";
			$result = mysqli_query($con,$query);
				if (mysqli_fetch_assoc($result)) 
					{
						$_SESSION['User']=$_POST['mail'];
						header("location:wellcome1.php");
					}
				else
					{

						header("location:authentification.php?Invalid=pleas enter correct user name and password");
					}

			}


		}

	}
	else{
		echo 'Not Working';
	}
?>
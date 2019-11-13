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

	}
	else{
		echo 'Not Working';
	}
?>
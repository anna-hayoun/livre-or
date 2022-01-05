<?php

require('sqlconfig.php');

if(isset($_POST['submit']))
{
	if (!empty(isset($_POST['login'], $_POST['password'], $_POST['password2'])))
	{
		$login = $_POST['login'];
		
		$password = $_POST['password'];
		
		$confirmpassword = $_POST['password2'];

		// requête SQL
		$query = mysqli_query($conn, "SELECT login FROM `utilisateurs` WHERE login = '$login'");
		$result = mysqli_fetch_all($query);
		

		if (count($result) == 0)
		{
			if ($confirmpassword == $password)
			{

				$res = mysqli_query($conn, "INSERT INTO `utilisateurs` (login, password, role) 
				VALUES ('$login', '$password', 'user')");

				if ($res)
				{
					echo "<div class='sucess'>
					<h3>Vous êtes inscrit avec succès.</h3>
					<p>Cliquez ici pour vous <a href='connexion.php'>connecter</a></p>
					</div>";	
				} 
			}
			else
			{
				echo "Les mots de passes doivent être identiques";
			}
		}
		else
		{
			echo "Nom d'utilisateur déjà utilisé";
		}
	}
	else 
	{
		echo "<h6>Veuillez remplir tous les champs.</h6>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<title>myus - Inscription</title>
</head>
<body>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

<h4>myus</h4>

<form class="box" action="" method="post">

    <h1 class="box-title">Inscrivez-vous !</h1>
    
	<input type="text" class="box-input" name="login" placeholder="Nom d'utilisateur" required />
	
	<input type="password" class="box-input" name="password" placeholder="Mot de passe" required />

	<input type="password" class="box-input" name="password2" placeholder="Confirmer le mdp" required />
	
	<input type="submit" name="submit" value="S'inscrire" class="box-button" />
    
	<p class="box-register">Déjà inscrit? <a href="connexion.php">Connectez-vous ici</a></p>

</form>

<footer>

<div id="link">© 2022 Copyright:
    <a href="https://github.com/anna-hayoun/livre-or">github.com/anna-hayoun</a>
</div>

<a href="https://github.com/anna-hayoun/livre-or"><p><img src="img/github.png" alt="Github" class="twi"></p></a>

</footer>

</body>
</html>
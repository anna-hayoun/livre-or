<?php

session_start();

require('sqlconfig.php');

?>


<?php

$DateTime = date('Y-m-d h:i:s', time());

if (isset($_POST['submit']))
{
    $id = $_SESSION['id'];

    $comm = $_POST['commentaire'];

    $res = mysqli_query($conn, "INSERT INTO commentaires(commentaire, id_utilisateur, date) VALUES ('$comm','$id','$DateTime')");
    header("Location: livre-or.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <title>myus - Avis</title>
</head>
<body>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

<header>

<nav>

    <ul>
    <h1 class="titre">myus</h1>
        <li><a aria-current="page" href="index.php"><b>Home</b></a></li>

        <li><a aria-current="page" href="livre-or.php"><b>Avis</b></a></li>
        
        <li class="droll">
            
                <a><b>Compte</b></a>
   
            <ul class="undroll">
        <li><a aria-current='page' href='profil.php'>Profil</a></li>

		<li><a aria-current='page' href='deconnexion.php'>Deconnexion</a></li>
            </ul>
        </li> 
    </ul>
</nav>

</header>

<main>

    <form class="box444" action="" method="POST">

    <h1 class="box-title444">Ecrivez votre commentaire</h1>

    <textarea class="box-input" name="commentaire"></textarea>
    <button class="box-button"  name = "submit" type="submit">Envoyer</button>
    </form>
<div>
</main>

<footer>

<div id="link">© 2022 Copyright:
    <a href="https://github.com/anna-hayoun/livre-or">github.com/anna-hayoun</a>
</div>

<a href="https://github.com/anna-hayoun/livre-or"><p><img src="img/github.png" alt="Github" class="twi"></p></a>

</footer>

</body>
</html>
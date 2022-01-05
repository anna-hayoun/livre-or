<?php

session_start();

require('sqlconfig.php');

if (isset($_SESSION['login']))
{
    $id = $_SESSION['id'];
    $request = "SELECT * FROM utilisateurs WHERE id = $id";
    $start = mysqli_query($conn, $request);

    if (isset($start))
    {
        $recup = mysqli_fetch_all($start);
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <title>myus - Profil</title>
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

<div class = "button">
    <form action='commentaire.php' class="add">
        <button class='box-button_com' type='submit'>Ajouter un commentaire</button>
    </form>
</div>


    <?php

    $query = mysqli_query($conn, "SELECT commentaires.id, login, commentaire, date FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER BY date DESC");
    $req = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach ($req as $val)
    {
        $val['login'];
        $val['commentaire'];
        $val['date'];

        echo "<div class='com'><h3 class='log'>".$val['login']."</h3><br><br><br>".
             "<p class='comment'>".$val['commentaire']."</p><br><br>".
             "<h5>Le ".$val['date']."</h5><br></div>";
    }
    
    ?>

</main>

<footer>

<div id="link">© 2022 Copyright:
    <a href="https://github.com/anna-hayoun/livre-or">github.com/anna-hayoun</a>
</div>

<a href="https://github.com/anna-hayoun/livre-or"><p><img src="img/github.png" alt="Github" class="twi"></p></a>

</footer>

</body>
</html>


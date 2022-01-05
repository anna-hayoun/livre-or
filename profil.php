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

if (!empty($_POST['login']) && !empty($_POST['password']))
{
    $login = $_POST['login'];
    $password = $_POST['password'];

    $select = "SELECT * FROM utilisateurs WHERE id = '$id'";
    $sql = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($sql);

    $res = $row['id'];

    if ($res === $id)
    {
        $update = "UPDATE utilisateurs SET login = '$login', password = '$password' WHERE id = $id";
        $sql2 = mysqli_query($conn, $update);

        if ($sql2)
        {
            echo "<h2>Votre profil a bien été modifié.</h2>";
        }
        else 
        {
            header('Location: profil.php');
            echo "Profil non mis à jour.";
        }
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

<div class="box444">
<form  action="" method="post">

<h1 class="box-title444">Modifier votre profil</h1>
        
<?php echo '<div class="profil">Connecté en tant que '.$recup[0][1].'</div>'; ?>

<div>
    <label for="login">Nom d'utilisateur</label>
    <input class="box-input" type="text" value="<?php echo $recup[0][1]; ?>" id="login" name="login">
</div>

<div>
    <label for="password">Mot de passe</label>
    <input class="box-input" type="password" value="<?php echo $recup[0][2]; ?>" id="password" name="password">
</div>    

<div>
    <button type="submit" name="submit" class="box-button">Modifier</button>
</div>

</form>
</div>

<footer>

<div id="link">© 2022 Copyright:
    <a href="https://github.com/anna-hayoun/livre-or">github.com/anna-hayoun</a>
</div>

<a href="https://github.com/anna-hayoun/livre-or"><p><img src="img/github.png" alt="Github" class="twi"></p></a>

</footer>

</body>
</html>
<?php
	
session_start();

require('sqlconfig.php');

// Vérifiez si utilisateur connecté, sinon redirection vers page de connexion

if(!isset($_SESSION["login"]))
{
	header("Location: connexion.php");
	exit();
}
    $id = $_SESSION['id'];
    $request = "SELECT * FROM utilisateurs WHERE id = $id";
    $start = mysqli_query($conn, $request);

    if (isset($start))
    {
        $recup = mysqli_fetch_all($start);
    }


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
    <title>myus - Page d'accueil</title>
</head>

<body>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
</style>

<header>

<nav>

    <ul>
    <h1 class="titre">myus</h1>
        <li><a aria-current="page" href="index.php"><b>Home</b></a></li>

        <li><a aria-current="page" href="livre-or.php"><b>Avis</b></a></li>
        
        <li class="droll">
            
                <a><b>Compte</b></a>
   
            <ul class="undroll">
        <li><a aria-current='page' href='profil.php'><b>Profil</b></a></li>

		<li><a aria-current='page' href='deconnexion.php'><b>Deconnexion</b></a></li>
            </ul>
        </li> 
    </ul>
</nav>
</header> 

<main>

<div class="cont-ban">
        <p><img src="img/board1.png" alt="Bannière" class="ban"></p>
    <div class="c-txt-ban">
        <div class="intro"><p>Découvre chaque semaine les albums les plus cités en commentaires, </br></br>n'hésite pas à envoyer tes albums préférés !</p></div>
    </div>
</div>

<div class="alb">

<section>
    <div class="cont-alb">
            <p><img src="img/floyd.jpg" alt="Whish You Were Here" title="Whish you were here" class="floyd"></p>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">Pink Floyd</a></span></br><a href="https://open.spotify.com/album/0bCAjiUamIFqKJsekOYuRw" class="link-alb"> "<em> Wish You Were Here </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
        <a href="commentaire.php"><p><img src="img/qalf.jpg" alt="Qalf Infinity" title="Qalf Infinity" class="qalf"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">Damso</a></span></br><a href="https://open.spotify.com/album/2Cv2mrKMRyYuXJTlQmY4hj" class="link-alb"> "<em> Qalf Infinity </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/queen.jpg" alt="News Of The World" title="News of the world" class="queen"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">Queen</a></span></br><a href="https://open.spotify.com/album/3TKTjR4E3LAMfRsPeRsNhT" class="link-alb"> "<em> News Of The Wolrd </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/17.jpg" alt="17" title="17" class="17"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">XXXtentacion</a></span></br><a href="https://open.spotify.com/album/5VdyJkLe3yvOs0l4xXbWp0" class="link-alb"> "<em> 17 </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/nepal.jpg" alt="Adios Bahamas" class="nepal"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><span><a href="commentaire.php" class="link-name">Népal</a></span></br><a href="https://open.spotify.com/album/3VsBRRKlb3f8oGxkVOkK5e" class="link-alb"> "<em> Adios Bahamas </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/macm.jpg" alt="Swimming" title="Swimming" class="macm"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">Mac Miller</a></span></br><a href="https://open.spotify.com/album/5wtE5aLX5r7jOosmPhJhhk" class="link-alb"> "<em> Swimming </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/ty.jpg" alt="Flower Boy" title="Flower Boy" class="ty"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">Tyler, the creator</a></span></br><a href="https://open.spotify.com/album/2nkto6YNI4rUYTLqEwWJ3o" class="link-alb"> "<em> Flower Boy </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/ledzep.jpg" alt="Mothership" title="Mothership" class="ledzep"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">Led Zeppelin</a></span></br><a href="https://open.spotify.com/album/4wExFfncaUIqSgoxnqa3Eh" class="link-alb"> "<em> Mothership </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/zilla.png" alt="Dog Boy" title="Dog Boy" class="zilla"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">Zillakami</a></span></br><a href="https://open.spotify.com/album/5RongMpRt5jcdZ7gpAKtWn" class="link-alb"> "<em> Dog Boy </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/scdboys.png" alt="I Wanna Die In New Orleans" title="I Wanna Die In New Orleans" class="scdboys"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">$uicideBoy$</a></span></br><a href="https://open.spotify.com/album/2ivOxIKDHxEo6WMD9m3ytn" class="link-alb"> "<em> I Wanna Die In New Orleans </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/orel.jpg" alt="Le Chant Des Sirènes" title="Le Chant Des Sirènes" class="orel"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">Orelsan</a></span></br><a href="https://open.spotify.com/album/5GfsaNstrK8rszTX5XYtXU" class="link-alb"> "<em> Le Chant Des Sirènes </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/qlf.png" alt="Deux Frères" title="Deux Frères" class="qlf"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">PNL</a></span></br><a href="https://open.spotify.com/album/2JtKf1aFxqS0M3QIj98nG5" class="link-alb"> "<em> Deux Frères </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/palpal.png" alt="Amina" title="Amina" class="pal"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">Lomepal</a></span></br><a href="https://open.spotify.com/album/5dZVLJVUZduRmYFINFgE7Y" class="link-alb"> "<em> Amina </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/toxicity.jpg" alt="Toxicity" title="Toxicity" class="toxi"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">System Of A Down</a></span></br><a href="https://open.spotify.com/album/6jWde94ln40epKIQCd8XUh" class="link-alb"> "<em> Toxicity </em>"</a></p></div>
        </div>
    </div>
</section>

<section>
    <div class="cont-alb">
            <a href="commentaire.php"><p><img src="img/blond.png" alt="Blond" title="Blond" class="blond"></p></a>
        <div class="c-txt-alb">
            <div class="txtalb"><p><span><a href="commentaire.php" class="link-name">Franck Ocean</a></span></br><a href="https://open.spotify.com/album/3mH6qwIy9crq0I9YQbOuDf" class="link-alb"> "<em> Blonde </em>"</a></p></div>
        </div>
    </div>
</section>
    
</div>

</main>

<footer>

<div id="link">© 2022 Copyright:
    <a href="https://github.com/anna-hayoun/livre-or">github.com/anna-hayoun</a>
</div>

<a href="https://github.com/anna-hayoun/livre-or"><p><img src="img/github.png" alt="Github" class="twi"></p></a>

</footer>

</body>
</html>
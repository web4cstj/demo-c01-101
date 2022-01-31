<?php
include_once "php/Couleur.php";
echo Couleur::$nbCouleurs;
$nom = 'Martin Boudreau';
$couleurFond = '#333';
$couleurTexte = Couleur::rgb(0, 255,255,.5);
echo $couleurTexte;
$noPhoto = rand(1,3);
$couleurFond = Couleur::couleurAlea();
$couleurDebut = Couleur::couleurAlea(true);
$couleurFin = Couleur::couleurAlea();
$angle = rand(0,359);
$degrade = "linear-gradient({$angle}deg, $couleurDebut, $couleurFin)";
// $couleurs = [];
// for ($i = 0; $i < rand(2,100); $i += 1) {
// 	$r = rand(0,255);
// 	$g = rand(0,255);
// 	$b = rand(0,255);
// 	$couleurs[] = "rgb($r,$g,$b)";
	
// }
// $couleurs = implode(",\n", $couleurs);
// $degrade = "linear-gradient({$angle}deg, $couleurs)";
?><!DOCTYPE html>
<html lang="fr">
<head>
<title><?php echo $nom; ?></title>
<meta charset="utf-8" />
<style>
	html, body {
		height: 100%;
		margin: 0;
		padding: 1em;
	}
body {
	background-color:<?php echo $couleurFond; ?>;
	background-image:<?php echo Couleur::degrade(); ?>;
}
<?php Couleur::$nbCouleurs = 3; ?>
h1 {
	background-image:<?php echo Couleur::degrade(); ?>;
}
</style>
</head>

<body style="color:<?php echo $couleurTexte; ?>;">
	<h1>Bonjour, mon nom est<br /><?php echo $nom; ?></h1>
	<p>Voici une de mes photos préférées  :</p>
	<img src="images/photo<?php echo $noPhoto; ?>.jpg" alt=""/>
</body>
</html>
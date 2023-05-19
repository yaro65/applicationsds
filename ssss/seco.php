<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=inscription', 'root', '');
// Récupération des données du formulaire de connexion
$nom = $_POST['nom'];
$email = $_POST['email'];
// Vérification des informations de connexion dans la base de données
$req = $bdd->prepare('SELECT * FROM listesds WHERE nom = ? AND email = ?');
$req->execute(array($nom, $email));
$resultat = $req->fetch();
if (!$resultat) {
    /* Si les informations de connexion sont incorrectes, renvoyer 
    l'utilisateur vers la page de connexion avec un message d'erreur*/
    echo 'Nom ou email incorrecte';
} else {
    /*Si les informations de connexion sont correctes,
     rediriger l'utilisateur vers la page suivante*/
    header('Location: liste.php');
}
?>
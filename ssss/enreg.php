       
    <?php

include('conex.php');

// Traitement du formulaire d'inscription
if (isset($_POST['submit'])) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
  $date_de_naissance = $_POST['date_de_naissance'];
  $date_admission = $_POST['date_admission'];
  $sous_couver = $_POST['sous_couver'];
	
	// Insertion des données dans la base de données
	try {
    $sql = "INSERT INTO listesds (nom, prenom , email, date_de_naissance, date_admission, sous_couver) VALUES (:nom, :prenom, :email, :date_de_naissance, :date_admission, :sous_couver)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':date_de_naissance', $date_de_naissance);
    $stmt->bindParam(':date_admission', $date_admission);
    $stmt->bindParam(':sous_couver', $sous_couver);
    $stmt->execute();
		echo 'Inscription réussie !';
	} catch (PDOException $e) {
		echo 'Erreur d\'inscription :' . $e->getMessage();
	}
}
?>
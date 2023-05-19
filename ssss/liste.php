<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boostra/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
       <p style=" color: #198EF5;  font-size:45px; font-weight: 800; margin-left:150px">Liste des étudiants admis au sein de L’UFR/SDS</p>
<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inscription";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}

// Récupération des données des étudiants
$sql = "SELECT * FROM listesds";
$result = mysqli_query($conn, $sql);

// Affichage des données dans une table HTML
      
echo "<table class='table table-hover table-responsive'>
		<tr  class='table-dark'>
			<th>Nom</th>
			<th>Prénom</th>
            <th>Email</th>
			<th>Date de naissance</th>
			<th>Date d'inscription</th>
            <th>Personne a Preveni</th>
		</tr>";

if (mysqli_num_rows($result) > 0) {
    // Parcourir les lignes de données
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        		<td>" . $row["nom"] . "</td>
        		<td>" . $row["prenom"] . "</td>
                <td>" . $row["email"] . "</td>
        		<td>" . $row["date_de_naissance"] . "</td>
        		<td>" . $row["date_admission"] . "</td>
                <td>" . $row["sous_couver"] . "</td>
        	  </tr>";
    }
} else {
    echo "0 résultats";
}

echo "</table>";

mysqli_close($conn);
?>
</body>
</html>

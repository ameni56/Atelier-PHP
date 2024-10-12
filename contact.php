<?php

// Récupérer les clés 
$tab = ['nom', 'prenom', 'email', 'telephone', 'adresse'];

// Initialiser une variable pour vérifier les valeurs
$testValue = false;

// Boucle pour vérifier si chaque clé est définie et non vide
foreach ($tab as $key) {
    if (!isset($_GET[$key]) || empty(trim($_GET[$key]))) {
        $testValue = true;
        break;
    }
}

// Vérifier s'il y a des champs manquants
if ($testValue) {
    echo "<h1>Champs manquants</h1>";
} else {
$formData = [];
// Récupérer les valeurs des clés
foreach ($tab as $key) {
    $formData[$key] = isset($_GET[$key]) ? $_GET[$key] : '';
}


echo "
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Formulaire Soumis</title>
    <link rel='stylesheet' href='./style.css'>
</head>
<body>
  
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Adresse</th>
        </tr>
        <tr>
            <td>{$formData['nom']}</td>
            <td>{$formData['prenom']}</td>
            <td>{$formData['email']}</td>
            <td>{$formData['telephone']}</td>
            <td>{$formData['adresse']}</td>
        </tr>
    </table>
</body>
</html>
";
}
?>

<?php
// Vérifie si la requête est une requête POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère les données saisies par l'utilisateur
    $ageConducteur = isset($_POST['age']) ? intval($_POST['age']) : 0;
    $modeleVoiture = isset($_POST['modele']) ? $_POST['modele'] : '';

    // Effectue ici le calcul de l'assurance en fonction des données saisies
    // C'est juste un exemple, vous pouvez utiliser une formule plus complexe
    $coutAssurance = ($ageConducteur < 25) ? 1500 : 800;

    // Renvoie la réponse en format JSON
    $response = array(
        'coutAssurance' => $coutAssurance
    );

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>

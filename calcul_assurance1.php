<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère les données saisies par l'utilisateur
    $ageConducteur = isset($_POST['age']) ? intval($_POST['age']) : 0;
    $modeleVoiture = isset($_POST['modele']) ? $_POST['modele'] : '';

    // Effectue ici le calcul de l'assurance en fonction des données saisies
    // Coefficients arbitraires pour chaque critère
    $coeff_age = 50;
    $coeff_modele = 100;

    // Calcul du coût de l'assurance
    $coutAssurance = $ageConducteur * $coeff_age + strlen($modeleVoiture) * $coeff_modele;

    // Renvoie la réponse en format JSON
    $response = array(
        'coutAssurance' => $coutAssurance
    );

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>

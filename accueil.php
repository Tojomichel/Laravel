<?php
// Fonction pour générer un mot de passe aléatoire
function genererMotDePasse($longueur = 14) {
    // Ensemble de caractères possibles
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $motDePasse = '';
    $longueurMax = strlen($caracteres) - 1;

    // Génération du mot de passe
    for ($i = 0; $i < $longueur; $i++) {
        $motDePasse .= $caracteres[rand(0, $longueurMax)];
    }

    return $motDePasse;
}

// Si le bouton est cliqué, on génère un nouveau mot de passe
if (isset($_POST['generer'])) {
    $motDePasseGenere = genererMotDePasse();
}
?>
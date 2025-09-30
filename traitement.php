<?php
// Inclure la connexion PostgreSQL (via PDO)
require_once __DIR__ . '/config/database.php';

// Tableau pour stocker les erreurs
$errors = [];

// Vérifier la méthode HTTP
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('<p>Méthode non autorisée.</p><a href="formulaire.php">Retour au formulaire</a>');
}

// Récupération sécurisée des données
$nom     = trim(htmlspecialchars($_POST['nom'] ?? ''));
$email   = trim(htmlspecialchars($_POST['email'] ?? ''));
$message = trim(htmlspecialchars($_POST['message'] ?? ''));

// --- VALIDATIONS ---
// Vérifier que les champs ne sont pas vides
if (empty($nom)) {
    $errors[] = "Le nom est requis.";
}
if (empty($email)) {
    $errors[] = "L'email est requis.";
}
if (empty($message)) {
    $errors[] = "Le message est requis.";
}

// Vérifier format email
if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'adresse email est invalide.";
}

// Vérifier longueur minimale du message
if (!empty($message) && strlen($message) < 10) {
    $errors[] = "Le message doit contenir au moins 10 caractères.";
}

// --- ENREGISTREMENT EN BASE ---
if (empty($errors)) {
    try {
        // Requête paramétrée
        $sql = "INSERT INTO messages (nom, email, message, created_at) 
                VALUES (:nom, :email, :message, NOW())";
        $stmt = $pdo->prepare($sql);

        // Liaison sécurisée des paramètres
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo "<h2>✅ Votre message a bien été enregistré !</h2>";
        } else {
            echo "<h2>❌ Une erreur est survenue lors de l'enregistrement.</h2>";
        }
    } catch (PDOException $e) {
        echo "<h2>❌ Erreur : " . htmlspecialchars($e->getMessage()) . "</h2>";
    }
} else {
    // Affichage des erreurs
    echo "<h2>⚠️ Erreurs détectées :</h2><ul>";
    foreach ($errors as $error) {
        echo "<li>" . htmlspecialchars($error) . "</li>";
    }
    echo "</ul>";
}

// Bouton de retour
echo '<p><a href="formulaire.php">⬅ Retour au formulaire</a></p>';

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand d-flex align-items-center mx-auto">
                <img src="assets/img/Lettre_C_stylisee_sur_fond_noir.webp" 
                     alt="Logo du site"
                     width="48"
                     height="48"
                     class="rounded-circle me-2 img-fluid">
                <span class="font" id="title">ESPACE CONTACT</span>
            </a>
        </div>
    </nav>
</header>
<main class="container mt-5 pt-5">
    <section class="text-center font">
        <h1>Bienvenue sur l'espace contact</h1>
        <p>Envoyez-nous un message via le formulaire ci-dessous.</p>
    </section>
     <section class="row justify-content-center">
        <div class="col-md-6 shadow p-3 mb-5 bg-body-tertiary rounded">
            <h2 class="mb-4 text-center">Nous contacter</h2>
            <form action="traitement.php" method="POST" novalidate>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom complet *</label>
                    <input type="text" id="nom" name="nom" class="form-control" required maxlength="100">
                    <div class="invalid-feedback">
                        Veuillez entrer votre nom.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse email *</label>
                    <input type="email" id="email" name="email" class="form-control" required maxlength="150">
                    <div class="invalid-feedback">
                        Veuillez entrer une adresse email valide.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message *</label>
                    <textarea id="message" name="message" class="form-control" required minlength="10"></textarea>
                    <div class="invalid-feedback">
                        Votre message doit contenir au moins 10 caractères.
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mb-4">Envoyer</button>
                </div>
            </form>
        </div>
    </section>
</main>
<footer class="bg-dark text-white text-center py-3 mt-auto">
    &copy; <?= date('Y') ?> Espace Contact. Tous droits réservés.
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détails de l'étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center">
    <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%;">
        <div class="d-flex align-items-center mb-4">
            <i class="bi bi-person-circle fs-1 me-3 text-primary"></i>
            <h3 class="h3 mb-0">Détails de l'étudiant</h3>
        </div>
        <p><strong>ID :</strong> <?= htmlspecialchars($etudiant['id']) ?></p>
        <p><strong>Nom :</strong> <?= htmlspecialchars($etudiant['nom']) ?></p>
        <p><strong>Prénom :</strong> <?= htmlspecialchars($etudiant['prenom']) ?></p>
        <p><strong>Email :</strong> <?= htmlspecialchars($etudiant['email']) ?></p>
        <p><strong>Filière :</strong> <?= htmlspecialchars($etudiant['filiere']) ?></p>
        <div class="text-center">
            <a href="?controller=etudiant" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Retour</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

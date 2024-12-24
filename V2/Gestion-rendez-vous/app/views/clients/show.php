<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détails du Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center">
    <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%;">
        <div class="d-flex align-items-center mb-4">
            <i class="bi bi-person-circle fs-1 me-3 text-primary"></i>
            <h3 class="h3 mb-0">Détails du Client</h3>
        </div>
        <p><strong>ID :</strong> <?= htmlspecialchars($client['id']) ?></p>
        <p><strong>Nom :</strong> <?= htmlspecialchars($client['nom']) ?></p>
        <p><strong>Prénom :</strong> <?= htmlspecialchars($client['prenom']) ?></p>
        <p><strong>Email :</strong> <?= htmlspecialchars($client['email']) ?></p>
        <p><strong>Téléphone :</strong> <?= htmlspecialchars($client['telephone']) ?></p>
        <div class="text-center">
            <a href="?controller=client" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Retour</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

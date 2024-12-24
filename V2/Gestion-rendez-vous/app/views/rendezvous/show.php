<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détails du Rendez-vous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%;">
        <div class="d-flex align-items-center mb-4">
            <i class="bi bi-calendar-event fs-1 me-3 text-primary"></i>
            <h3 class="h3 mb-0">Détails du Rendez-vous</h3>
        </div>

        <div class="mb-3">
            <p><strong>ID :</strong> <?= htmlspecialchars($rendez_vous['id']) ?></p>
            <p><strong>Date :</strong> <?= htmlspecialchars($rendez_vous['date']) ?></p>
            <p><strong>Heure :</strong> <?= htmlspecialchars($rendez_vous['heure']) ?></p>
            <p><strong>Description :</strong> <?= htmlspecialchars($rendez_vous['description']) ?></p>
        </div>

        <div class="mb-3">
            <p><strong>Nom du Client :</strong> <?= htmlspecialchars($client['prenom']) . ' ' . htmlspecialchars($client['nom']) ?></p>
            <p><strong>Email du Client :</strong> <?= htmlspecialchars($client['email']) ?></p>
            <p><strong>Téléphone du Client :</strong> <?= htmlspecialchars($client['telephone']) ?></p>
        </div>

        <div class="text-center mt-3">
            <a href="?controller=rendezvous" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Retour</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

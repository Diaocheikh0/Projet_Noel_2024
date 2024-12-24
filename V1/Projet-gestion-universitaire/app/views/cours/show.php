<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Cours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center mt-4">
    <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%;">
        <div class="d-flex align-items-center mb-4">
            <i class="bi bi-book-fill fs-1 me-3 text-primary"></i>
            <h3 class="h3 mb-0">Détails du Cours</h3>
        </div>
        <p><strong>Nom du Cours :</strong> <?= htmlspecialchars($cour['nom_cours']) ?></p>
        <p><strong>Code du Cours :</strong> <?= htmlspecialchars($cour['code_cours']) ?></p>
        <p><strong>Nombre d'Heures :</strong> <?= htmlspecialchars($cour['nombre_heures']) ?></p>
        <div class="text-center">
            <a href="?controller=cour" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Retour</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


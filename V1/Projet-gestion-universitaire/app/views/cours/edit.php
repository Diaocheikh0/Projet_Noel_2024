<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Cours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h4 class="text-center">Modifier Cours</h4>
            <form action="?controller=cour&action=updateEedit" method="POST" class="container">
                <input type="hidden" name="id" value="<?= htmlspecialchars($cour['id']); ?>">

                <div class="mb-3">
                    <label for="" class="form-label">Nom Cours</label>
                    <input type="text" autofocus name="nom_cours" value="<?= htmlspecialchars($cour['nom_cours']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Code Cours</label>
                    <input type="text" name="code_cours" value="<?= htmlspecialchars($cour['code_cours']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Nombre Heures</label>
                    <input type="number" name="nombre_heures" value="<?= htmlspecialchars($cour['nombre_heures']); ?>" class="form-control" required>
                </div>

                <div class="text-center">
                    <a href="?controller=cour" class="mt-3 btn btn-warning" type="submit"><i class="bi bi-arrow-left"></i> Annuler</a>
                    <button class="mt-3 btn btn-success" type="submit">Modifier <i class="bi bi-check2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


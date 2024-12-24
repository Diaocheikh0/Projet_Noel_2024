<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h4 class="text-center">Modifier Etudiants</h4>
            <form action="?controller=etudiant&action=updateEedit" method="POST" class="container">
                <input type="hidden" name="id" value="<?= htmlspecialchars($etudiant['id']); ?>">

                <div class="mb-3">
                    <label for="" class="form-label">Nom</label>
                    <input type="text" autofocus name="nom" value="<?= htmlspecialchars($etudiant['nom']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Prenom</label>
                    <input type="text" name="prenom" value="<?= htmlspecialchars($etudiant['prenom']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" value="<?= htmlspecialchars($etudiant['email']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Filière</label>
                    <input type="text" name="filiere" value="<?= htmlspecialchars($etudiant['filiere']); ?>" class="form-control" required>
                </div>

                <div class="text-center">
                    <a href="?controller=etudiant" class="mt-3 btn btn-warning" type="submit"><i class="bi bi-arrow-left"></i> Annuler</a>
                    <button class="mt-3 btn btn-success" type="submit">Modifier <i class="bi bi-check2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


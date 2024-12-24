<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h4 class="text-center">Modifier Client</h4>
            <form action="?controller=client&&action=updateEedit" method="POST" class="container">
                <input type="hidden" name="id" value="<?= htmlspecialchars($client['id']); ?>">

                <div class="mb-3">
                    <label for="" class="form-label">Nom</label>
                    <input type="text" autofocus name="nom" value="<?= htmlspecialchars($client['nom']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Prénom</label>
                    <input type="text" name="prenom" value="<?= htmlspecialchars($client['prenom']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" value="<?= htmlspecialchars($client['email']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" name="telephone" value="<?= htmlspecialchars($client['telephone']); ?>" class="form-control" required>
                </div>

                <div class="text-center">
                    <a href="?controller=client" class="mt-3 btn btn-warning" type="submit"><i class="bi bi-arrow-left"></i> Annuler</a>
                    <button class="mt-3 btn btn-success" type="submit">Modifier <i class="bi bi-check2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


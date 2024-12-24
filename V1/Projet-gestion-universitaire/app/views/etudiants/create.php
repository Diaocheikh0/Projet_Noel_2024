<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout Etudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row mb-3">
        <div class="col-6">
            <h4 class="text-center">Ajout Etudiant</h4>
            <form action="?controller=etudiant&&action=save" method="POST">
                <div class="row mb-3">
                    <div class="col">
                        <input required type="text" class="form-control" autofocus placeholder="Nom" name="nom"><br>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input required type="text" class="form-control" autofocus placeholder="Prénom" name="prenom"><br>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input required type="text" class="form-control" autofocus placeholder="Email" name="email"><br>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input required type="text" class="form-control" autofocus placeholder="Filière" name="filiere"><br>
                    </div>
                </div>
                <div class="text-center">
                    <a href="?controller=etudiant" class="mt-3 btn btn-warning" type="submit"><i class="bi bi-arrow-left"></i> Annuler</a>
                    <button class="mt-3 btn btn-success" type="submit">Valider <i class="bi bi-check2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
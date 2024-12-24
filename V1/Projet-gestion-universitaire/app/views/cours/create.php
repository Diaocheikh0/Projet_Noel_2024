<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout Cours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row mb-3">
        <div class="col-6">
            <h4 class="text-center">Ajout Cours</h4>
            <form action="?controller=cour&&action=save" method="POST">
                <div class="row mb-3">
                    <div class="col">
                        <input required type="text" class="form-control" autofocus placeholder="Nom Cours" name="nom_cours"><br>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input required type="text" class="form-control" autofocus pattern="[A-Za-z]{2}[0-9]{3}" title="Le code cours doit contenir 2 lettres suivies de 3 chiffres (ex : CS101)" placeholder="Code Cours" name="code_cours"><br>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input required type="number" class="form-control" placeholder="Nombre d'heures" name="nombre_heures"><br>
                    </div>
                </div>

                <div class="text-center">
                    <a href="?controller=cour" class="mt-3 btn btn-warning" type="submit"><i class="bi bi-arrow-left"></i> Annuler</a>
                    <button class="mt-3 btn btn-success" type="submit">Valider <i class="bi bi-check2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
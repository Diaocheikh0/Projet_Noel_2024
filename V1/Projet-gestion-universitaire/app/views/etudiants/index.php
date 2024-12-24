<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div>
    <a href="." class="btn btn-success btn-sm"><i class="bi bi-house-door-fill"></i> Acceuil</a>
</div>
<div class="container">
    <h2 class="text-center">Liste des Etudiants</h2>

    <a class="btn btn-primary" href="?controller=etudiant&&action=add">Ajout <i class="bi bi-person-plus-fill"></i></a>
    <table class="table table-bordered text-center mt-4">
        <tr class="table-dark">
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>EMAIL</th>
            <th>FILIERE</th>
            <th colspan="2">ACTIONS</th>
        </tr>
        <?php while( $e = pg_fetch_assoc($etudiant)){ ?>
            <tr>
                <td  class="table-secondary"><?= $e['id'] ?></td>
                <td><?= $e['nom'] ?></td>
                <td><?= $e['prenom'] ?></td>
                <td><?= $e['email'] ?></td>
                <td><?= $e['filiere'] ?></td>
                <td>
                    <a class="btn btn-success btn-sm" href="?controller=etudiant&&action=show&id=<?= $e['id'] ?>"><i class="bi bi-eye-fill"></i></a>
                    <a class="btn btn-primary btn-sm" href="?controller=etudiant&&action=edit&id=<?= $e['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                    <a class="btn btn-danger btn-sm" href="?controller=etudiant&&action=delete&id=<?= $e['id'] ?>"><i class="bi bi-x-circle"></i></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
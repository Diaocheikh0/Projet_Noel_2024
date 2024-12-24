<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div>
    <a href="." class="btn btn-success btn-sm"><i class="bi bi-house-door-fill"></i> Acceuil</a>
</div>
<div class="container">
    <h2 class="text-center">Liste des Cours</h2>

    <a class="btn btn-primary" href="?controller=cour&&action=add">Ajout <i class="bi bi-journal-plus"></i></a>
    <table class="table table-bordered text-center mt-4">
        <tr class="table-dark">
            <th>ID</th>
            <th>NOM COURS</th>
            <th>CODE COURS</th>
            <th>NOMBRE D'HEURES</th>
            <th colspan="2">ACTIONS</th>
        </tr>
        <?php while( $c = pg_fetch_assoc($cour)){ ?>
            <tr>
                <td class="table-secondary"><?= $c['id'] ?></td>
                <td><?= $c['nom_cours'] ?></td>
                <td><?= $c['code_cours'] ?></td>
                <td><?= $c['nombre_heures'] ?></td>
                <td>
                    <a class="btn btn-success btn-sm" href="?controller=cour&&action=show&id=<?= $c['id'] ?>"><i class="bi bi-eye-fill"></i></a>
                    <a class="btn btn-primary btn-sm" href="?controller=cour&&action=edit&id=<?= $c['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                    <a class="btn btn-danger btn-sm" href="?controller=cour&&action=delete&id=<?= $c['id'] ?>"><i class="bi bi-x-circle"></i></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
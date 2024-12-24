<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Limiter la largeur de la colonne DESCRIPTION */
        td.description-column {
            max-width: 250px; /* Définir une largeur maximale */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
</head>
<body>
<div>
    <a href="." class="btn btn-success btn-sm"><i class="bi bi-house-door-fill"></i> Acceuil</a>
</div>
<div class="container">
    <h2 class="text-center">Liste des Rendez-Vous</h2>

    <a class="btn btn-primary" href="?controller=rendezvous&&action=add">Ajout <i class="bi bi-calendar-plus-fill"></i></a>
    <table class="table table-striped table-hover text-center mt-4">
        <tr class="table-dark">
            <th>ID</th>
            <th>DATE</th>
            <th>HEURE</th>
            <th>DESCRIPTION</th>
            <th>ID CLIENT</th>
            <th colspan="2">ACTIONS</th>
        </tr>
        <?php foreach ($rendezvous as $rv){ ?>
            <tr>
                <td class="table-secondary"><?= $rv['id'] ?></td>
                <td><?= $rv['date'] ?></td>
                <td><?= $rv['heure'] ?></td>
                <td class="description-column"><?= $rv['description'] ?></td>
                <td><?= $rv['client_id'] ?></td>
                <td>
                    <a class="btn btn-success btn-sm" href="?controller=rendezvous&&action=show&id=<?= $rv['id'] ?>"><i class="bi bi-eye-fill"></i></a>
                    <a class="btn btn-primary btn-sm" href="?controller=rendezvous&&action=edit&id=<?= $rv['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                    <a class="btn btn-danger btn-sm" href="?controller=rendezvous&&action=delete&id=<?= $rv['id'] ?>"><i class="bi bi-x-circle"></i></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
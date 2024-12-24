<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row mb-3">
        <div class="col-6">
            <h4 class="text-center">Ajout Rendez-vous</h4>
            <form action="?controller=rendezvous&&action=save" method="POST">
                <div class="row mb-3">
                    <div class="col">
                        <input required type="date" class="form-control" autofocus placeholder="Date" name="date"><br>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input required type="time" class="form-control" autofocus placeholder="Heure" name="heure"><br>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <textarea required class="form-control" placeholder="Description" name="description" rows="4"></textarea><br>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <select required class="form-control" name="client_id">
                            <option value="">Sélectionnez un client</option>
                            <?php foreach ($clients as $cl) : ?>
                                <option value="<?php echo htmlspecialchars($cl['id']); ?>">
                                    <?php echo htmlspecialchars($cl['id']) . ' - ' . htmlspecialchars($cl['prenom']) .' - ' .htmlspecialchars($cl['nom']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="text-center">
                    <a href="?controller=rendezvous" class="mt-3 btn btn-warning" type="submit"><i class="bi bi-arrow-left"></i> Annuler</a>
                    <button class="mt-3 btn btn-success" type="submit">Valider <i class="bi bi-check2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
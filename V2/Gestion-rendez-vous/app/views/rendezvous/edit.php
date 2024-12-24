<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Rendez-vous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h4 class="text-center">Modifier Rendez-vous</h4>
            <form action="?controller=rendezvous&&action=updateEedit" method="POST" class="container">
                <input type="hidden" name="id" value="<?= htmlspecialchars($rendezvousEdit['id']); ?>">

                <div class="mb-3">
                    <label for="" class="form-label">Date</label>
                    <input type="date" autofocus name="date" value="<?= htmlspecialchars($rendezvousEdit['date']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Heure</label>
                    <input type="time" name="heure" value="<?= htmlspecialchars($rendezvousEdit['heure']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" class="form-control" required><?= htmlspecialchars($rendezvousEdit['description']); ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">ID Client</label>
                    <select name="client_id" class="form-control" required>
                        <option value="">Sélectionnez un Client</option>
                        <?php foreach ($clients as $cl) : ?>
                            <option value="<?= htmlspecialchars($cl['id']); ?>" <?= $cl['id'] == $rendezvousEdit['client_id'] ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($cl['id']) . ' - ' . htmlspecialchars($cl['prenom']) .' - ' .htmlspecialchars($cl['nom']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="text-center">
                    <a href="?controller=rendezvous" class="mt-3 btn btn-warning" type="submit"><i class="bi bi-arrow-left"></i> Annuler</a>
                    <button class="mt-3 btn btn-success" type="submit">Modifier <i class="bi bi-check2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


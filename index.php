<?php require_once './function.php';
$dischi = getDischi();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-dark text-white text-center py-3">
        <h1>Dischi</h1>
    </header>
    <div class="container-sm my-5">
        <div class="row justify-content-center g-4 bg-body-tertiary rounded-3 py-3"
            style="display: flex; flex-wrap: wrap;">
            <?php foreach ($dischi as $curItem) { ?>
                <div class="col-auto">
                    <div class="card h-100" style="width: 200px;">
                        <img src="<?php echo $curItem['cover']; ?>" class="card-img-top img-fluid"
                            style="height: 200px; object-fit: cover;" alt="">
                        <div class="card-body">
                            <div class="card-title">
                                <h5 class="card-title text-center"><?php echo $curItem['titolo'] ?></h5>
                            </div>
                            <p class="card-text text-center"><?php echo $curItem['artista'] ?></p>
                            <p class="card-text text-center">
                                <strong>Genere:</strong> <?php echo $curItem['genere'] . " - " . $curItem['anno']; ?>
                            </p>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- form -->
        <div class="text-center my-3">
            <h2>Aggiungi un disco</h2>
        </div>
        <form action="server.php" method="POST" class="d-flex flex-column w-50 mx-auto justify-content-center align-items-center">
    <div class="row mb-3 text-center">
        <div class="col">
            <label for="cover" class="form-label">Cover URL</label>
            <input type="text" class="form-control" id="cover" name="cover" required>
        </div>
        <div class="col">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="titolo" name="titolo" required>
        </div>
        <div class="col">
            <label for="artista" class="form-label">Artista</label>
            <input type="text" class="form-control" id="artista" name="artista" required>
        </div>
    </div>
    <div class="row mb-3 text-center">
        <div class="col">
            <label for="genere" class="form-label">Genere</label>
            <input type="text" class="form-control" id="genere" name="genere" required>
        </div>
        <div class="col">
            <label for="anno" class="form-label">Anno</label>
            <input type="number" class="form-control" id="anno" name="anno" required>
        </div>
        <div class="col d-flex align-items-end">
            <button type="submit" class="btn btn-dark w-50">Aggiungi</button>
        </div>
    </div>
</form>
    </div>
</body>

</html>
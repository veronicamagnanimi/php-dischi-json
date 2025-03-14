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
        <div class="row justify-content-center g-4" style="display: flex; flex-wrap: wrap;">
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
    </div>
</body>

</html>
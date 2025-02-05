<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Les plus grandes villes 2012</h1>
<h2>test git 1 branch</h2>
    <?php foreach($datas as $data): ?>
        <article>
            <p><?= $data->getNom() ?></p>
            <p><?= $data->getDepartement() ?></p>
            <p><?= $data->getPopulation() ?></p>
            <p><?= $data->getRegion() ?></p>
        </article>
    <?php endforeach; ?>





</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Les plus grandes villes 2012</h1>
<h2>classées par population desc</h2>
    <?php foreach($datas as $data): ?>
        <article>
            <p><?= $data->getNom() ?></p>
            <p><a href="<?= $router->generate('departement', ["id"=> $data->getDepartement()]); ?>"><?= $data->getDepartement() ?></a></p>
            <!-- <p><?= $data->getPopulation() ?></p> -->
            <!-- <p><?= $data->getCp() ?></p> -->

        <!-- cretion d'un bouton avec la methode POST pour renvoyer sur une page  villes du département -->
                <!-- action: choix du controller à appeller -->
            <form action= "<?= $router->generate('departementPost') ?>" method="post">
                <!-- pour récuperer la value, j'utiliserai le name via $_POST -->
            <input type="hidden" name = "id"  value = "<?= $data->getDepartement() ?>" >
            <input type="submit" name="submit" value="<?= $data->getDepartement() ?>">

            </form>

        </article>
    <?php endforeach; ?>





</body>
</html>

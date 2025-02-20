<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Toutes les villes du département</h1>

        
<?php

$lecture = 1;

foreach($datas as $data):
    if ($lecture==1) {
        $lecture=2;
      echo "<h2>" . $data->getDepartement() . "</h2>";  
    }
?>


       
        <p><?= $data->getNom() ?></p>
       
        <p><?= $data->getPopulation() ?></p>
        






        <?php endforeach; ?>

</body>
</html>
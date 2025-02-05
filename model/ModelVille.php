<?php

class ModelVille extends Model{  
    
    public function readville(){
        $req = $this->getDb()->query('SELECT ville_nom as nom, ville_departement as departement, ville_population_2012 as population
                                        FROM villes_france_free 
                                        ORDER BY ville_population_2012 DESC 
                                        LIMIT 20;');


$arrayobj = [];

while($datas = $req->fetch(PDO::FETCH_ASSOC)){

    $arrayobj[] = new Ville($datas);

}

return $arrayobj;

    }

}
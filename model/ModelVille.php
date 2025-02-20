<?php

class ModelVille extends Model{  
    
    public function readville(){
        $req = $this->getDb()->query('SELECT ville_nom as nom, ville_departement as departement, ville_population_2012 as population, ville_code_postal as cp 
                                        FROM villes_france_free 
                                        ORDER BY ville_population_2012 DESC 
                                        LIMIT 20;');


$arrayobj = [];

while($datas = $req->fetch(PDO::FETCH_ASSOC)){

    $arrayobj[] = new Ville($datas);

}

return $arrayobj;

    }

    public function readbydepartement($id, $order) {
        if ($order == "population") {
            $reqOrder = "order by `ville_population_2012` DESC LIMIT 10";
        } else {
            $reqOrder = "order by `ville_surface` DESC LIMIT 10";

        }
        $req = $this->getDb()->prepare("SELECT `ville_nom` as  nom ,`ville_departement` as departement , `ville_population_2012` as population, ville_code_postal as cp, ville_surface as surface FROM `villes_france_free` WHERE `ville_departement`=:id ". $reqOrder);

        $req->bindParam(':id', $id, PDO::PARAM_STR);

        $req->execute();

        // je boucle sur les enregistrements et les inclue dans un tableau d'objets

        $arrayobj = [];

        while($datas = $req->fetch(PDO::FETCH_ASSOC)){

            $arrayobj[] = new Ville($datas);

        }

        return $arrayobj;


      
        

    }



}
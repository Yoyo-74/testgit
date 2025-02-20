<?php
class ControllerVille {

    public function home() {

        global $router;


        // Le controller appelle la méthode readville() du model ModelVille, et stocke le résultat dans une variable $datas.
        $model = new ModelVille();
        $datas = $model->readville();

        // var_dump($datas);

        //puis le controller affiche les données dans la vue homepage.php.
        require_once('./view/homepage.php');

    }

    public function departement($id, $order) {
        global $router;
// c'est la methode qui a besoin du parametre
        $model = new ModelVille();
        // $datas renvoie à arrayobj 
        $datas = $model ->readbydepartement($id, $order);
        require_once ('./view/villespardepartement.php');
    }

    public function departementPost() {
        global $router;
        if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['id'])) {
            $model = new ModelVille();
            $id = $_POST['id'];
            $datas = $model ->readbydepartement($id);

            require_once ('./view/departement.php');

        }      

    }

    

}
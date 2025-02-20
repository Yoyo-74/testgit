1_ création index.php   à copier tel quel
    - modifier le nom du dossier racine :   $router->setBasePath('/testtumblr');
    - modifier les routes/map :             $router->map('GET', '/', 'ControllerVille#home', 'home');

2_ création dossier : MVC + entity  (class)
3_ création de la connexion à la bd : Model.php
4_ création du composer.json avec tous les dossiers où il y a des class à appeler 

{
    "autoload":{
        "classmap": ["entity/", "controller/", "model/", "view/"]
    },

    "require": {
        "altorouter/altorouter": "1.1.0"
    }
}

5_ dans Terminal tapez : composer install 
    création automatique du dossier "vendor"
    création automatique du fichier "composer.lock"

6_ Après avoir créé toutes les class des dossiers : entity + model + controller
    dans Terminal tapez : composer dump-autoload 

    Si fonctionne pas : 
        supprimer fichier composer.lock
        dans Terminal tapez : composer install 
        dans Terminal tapez : composer dump-autoload 

7_ creer un fichier .htaccess à la racine du projer
            RewriteEngine on
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteRule . index.php [L]


        
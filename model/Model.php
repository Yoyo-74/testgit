<?php

// Correction by Korben Dallas :

abstract class Model {
    private static $db;

    private static function setDb() {
        try {
            self::$db = new PDO('mysql:host=localhost;dbname=france', 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }   
    
    protected function getDb() {
        if (self::$db == null) {
            self::setDb();
        }
        return self::$db;
    }


}
<?php

class Database
{
    protected $dataBase;

    public function __construct()
    {
        // Nous effectuons un try and catch pour obtenir un message d'erreur explicite en cas de non connexion
        try {
            // Nous effectuons une instance PDO pour nous connecter à la base de données
            $this->dataBase = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8', 'testpdo', 'testpdo');
        } catch (Exception $errorMessage) {
            die('Erreur : ' . $errorMessage->getMessage()); 
        }
    }
}
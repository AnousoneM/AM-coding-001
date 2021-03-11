<?php

class Database
{
    protected $dataBase;

    private $user = 'testpdo';
    private $password = 'testpdo';
    private $dbName = 'hospitale2n';

    public function __construct()
    {
        // Nous effectuons un try and catch pour obtenir un message d'erreur explicite en cas de non connexion
        try {
            // Nous effectuons une instance PDO pour nous connecter à la base de données
            $this->dataBase = new PDO("mysql:host=localhost;dbname=$this->dbName;charset=utf8", $this->user, $this->password);
            // Nous allons activer le mode erreur de PDO a desactiver en PROD
            $this->dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $errorMessage) {
            die('Erreur : ' . $errorMessage->getMessage());
        }
    }
}

<?php

class Patients extends Database
{
    /**
     * Methode permettant de rajouter un patient dans notre base de donnée.
     *
     * @param array $patientDetails contient toutes les informations du patient
     * @return boolean Permet de savoir si la requête est bien passé
     */
    public function addPatient(array $patientDetails)
    {
        // Je mets en place des marqueurs nominatifs pour preparer ma requête avec des valeurs recuperées via form
        $query = 'INSERT INTO `patients` (`lastname`, `firstname`, `birthdate`, `phone`, `mail`)
        VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';

        // Nous preparons notre requete à l'aide de la methode prepare
        $addPatientQuery = $this->dataBase->prepare($query);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $addPatientQuery->bindValue(':lastname', $patientDetails['lastname'], PDO::PARAM_STR);
        $addPatientQuery->bindValue(':firstname', $patientDetails['firstname'], PDO::PARAM_STR);
        $addPatientQuery->bindValue(':birthdate', $patientDetails['birthdate'], PDO::PARAM_STR);
        $addPatientQuery->bindValue(':phone', $patientDetails['phone'], PDO::PARAM_STR);
        $addPatientQuery->bindValue(':mail', $patientDetails['mail'], PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($addPatientQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Méthode permettant d'obtenir la liste de tous les patients
     *
     * @return array
     */
    public function getAllPatients()
    {
        // Nous stockons ici notre requête pour permettre d'obtenir tous nos patients
        $query = 'SELECT `id`, `lastname`, `firstname` FROM `patients`';

        // Nous executons notre requête à l'aide de la méthode query
        $getAllPatientsQuery = $this->dataBase->query($query);

        // j'effectue la methode fetchAll pour obtenir le resultat sous forme de tableau
        return $getAllPatientsQuery->fetchAll();
    }
}

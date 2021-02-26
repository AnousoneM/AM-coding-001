<?php

class Appointments extends Database
{
    /**
     * Methode permettant d'ajouter un rdv 
     *
     * @param array $appointmentDetails
     * @return boolean en fonction de l'execution de la requête
     */
    public function addAppointment(array $appointmentDetails)
    {
        // Je mets en place des marqueurs nominatifs pour preparer ma requête avec des valeurs recuperées via form
        $query = 'INSERT INTO `appointments` (`dateHour`, `idPatients`)
        VALUES (:dateHour, :idPatients)';

        // Nous preparons notre requete à l'aide de la methode prepare
        $addAppointmentQuery = $this->dataBase->prepare($query);

        // je bind mes valeurs à l'aide de la methode bindvalue()
        $addAppointmentQuery->bindValue(':dateHour', $appointmentDetails['dateHour'], PDO::PARAM_STR);
        $addAppointmentQuery->bindValue(':idPatients', $appointmentDetails['idPatients'], PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($addAppointmentQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllAppointments()
    {
        // mise en place de ma requête
        $query = 'SELECT `appointments`.`id`, DATE_FORMAT(`dateHour`, "%d/%m/%Y") as `date`, DATE_FORMAT(dateHour, "%H:%i") as `hour`, CONCAT(`lastname`," ",`firstname`) as `patient`
        FROM appointments
        INNER JOIN `patients` ON `appointments`.`idPatients` = `patients`.`id`
        ORDER BY `date`';

        // j'execute la requête directement via un la methode query
        $getAllAppointmentQuery = $this->dataBase->query($query);

        // j'effectue la methode fetchAll pour obtenir le resultat sous forme de tableau
        return $getAllAppointmentQuery->fetchAll();
    }
}

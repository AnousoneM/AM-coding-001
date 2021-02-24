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
}

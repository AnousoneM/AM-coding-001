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


    /**
     * Methode permettant d'obtenir tous les rendez vous
     *
     * @return array
     */
    public function getAllAppointments()
    {
        // mise en place de la requête
        $query = 'SELECT `appointments`.`id`, DATE_FORMAT(`dateHour`, "%d/%m/%Y") as `date`, DATE_FORMAT(dateHour, "%H:%i") as `hour`, CONCAT(`lastname`," ",`firstname`) as `patient`
        FROM appointments
        INNER JOIN `patients` ON `appointments`.`idPatients` = `patients`.`id`
        ORDER BY `dateHour` ASC';

        // j'execute la requête directement via un la methode query
        $getAllAppointmentQuery = $this->dataBase->query($query);

        // j'effectue la methode fetchAll pour obtenir le resultat sous forme de tableau
        return $getAllAppointmentQuery->fetchAll();
    }


    /**
     * methode permettant d'obtenir tous les infos d'un rdv avec son id
     *
     * @param string $appointmentId
     * @return array
     */
    public function getAppointmentDetails(string $appointmentId)
    {
        // mise en place de la requête
        $query = 'SELECT `appointments`.`id`, `patients`.`mail`, `patients`.`phone`, DATE_FORMAT(`birthdate`, "%d/%m/%Y") as `birthdate`, DATE_FORMAT(`dateHour`, "%d/%m/%Y") as `date`, DATE_FORMAT(dateHour, "%H:%i") as `hour`, CONCAT(`lastname`," ",`firstname`) as `patient`
        FROM appointments
        INNER JOIN `patients` ON `appointments`.`idPatients` = `patients`.`id`
        WHERE `appointments`.`id`= :appointmentId
        ORDER BY `dateHour` ASC';

        // je prepare la requête via un la methode prepare
        $getAppointmentDetailsQuery = $this->dataBase->prepare($query);

        // Je bind ma valeur
        $getAppointmentDetailsQuery->bindValue(':appointmentId', $appointmentId, PDO::PARAM_STR);

        // Je teste sur la requête s'execute, si oui je recupère un tableau de données
        if ($getAppointmentDetailsQuery->execute()){
            return $getAppointmentDetailsQuery->fetch();
        } else {
            return false;
        }
    }





}

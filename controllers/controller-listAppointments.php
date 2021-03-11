<?php

require_once '../models/dataBase.php';
require_once '../models/appointments.php';

// Creation d'un objet selon une classe
$appointmentsObj = new Appointments;

//on definie un tableau de message
$messages = [];

// nous controllons si nous avons appuyé sur notre bouton delete via la methode POST se trouvant dans notre modal
if(isset($_POST['deleteBtn'])){
    if($appointmentsObj->deleteAppointment($_POST['deleteBtn'])){
        $messages['delete'] = 'Le RDV a bien été supprimé';
    } else {
        $messages['delete'] = 'Le RDV n\'a pas pu être supprimé';
    }
}

// Création d'un tableau contenant toutes les rdvs pour les afficher dans notre vue
$allAppointmentsArray = $appointmentsObj->getAllAppointments();

